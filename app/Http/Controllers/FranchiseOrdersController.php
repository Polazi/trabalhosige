<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FranchiseOrder;
use App\FranchiseProdOrder;

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
        $options = $request->get('options');

        dd($options);
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
            ]);

            $prodorder = FranchiseProdOrder::create([
                'franchise_orders_id' => $order->id,
                
            ]);


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
            'code' => 201,
            'message' => 'Registro gravado com sucesso',
            'supplier' => $supplier
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
