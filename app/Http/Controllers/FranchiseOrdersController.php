<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FranchiseOrder;
use App\FranchiseProdOrder;
use Illuminate\Support\Facades\DB;


class FranchiseOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $options = json_decode($request->get('options'));
        $prods = json_decode($request->get('prods'));

        //dd($options);
        /* $validatedData = $request->validate([
            'razao_social'       => 'required',
            'cnpj'      => 'required|numeric',
            'adress' => 'required',
        ]); */

        DB::beginTransaction();

        try{

            $order = FranchiseOrder::create([
                'deliver_date' => $options->deliver_date,
                'franchise_id' => $options->franchise_id,
                'store_id' => $options->store_id
            ]);

            foreach($prods as $key => $value){
                $prodorder = FranchiseProdOrder::create([
                    'franchise_orders_id' => $order->id,
                    'product_id' => $value->prod_id,
                    'quantidade' => $value->quantidade
                ]);
            }

        }catch(\Exception $e){

        DB::rollback();
            return response()->json([
                'code' => 403,
                'message' => 'Ocorreu um erro ao gravar o registro',
                'supplier' => $e->getMessage()
            ], 403);
        }

        DB::commit();

        return response()->json([
            'code' => 200,
            'message' => 'Registro gravado com sucesso',
            'order' => $order
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $final_value = 0;
        //$pedido = FranchiseOrder::find($id);
        $pedido = FranchiseOrder::with('store', 'franchise')->find($id);
        
        if(!$pedido){
            return response()->json([
                'code' => 200,
                'message' => 'Pedido não existe',
                'items' => ''
            ], 200);
        }

        $prod = DB::table('franchise_prod_orders')
        ->join('products', 'products.id', '=', 'franchise_prod_orders.product_id')
        ->select('franchise_orders_id', 'product_id', 'quantidade', 'products.unity_value')
        ->where('franchise_orders_id', $id)
        ->get();

        foreach ($prod as $key => $value) {
            $final_value += $value->unity_value * $value->quantidade;
        }
        
        return response()->json([
            'code' => 200,
            'message' => '',
            'items' => $pedido,
            'prod' => $prod,
            'final_value' => $final_value
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
