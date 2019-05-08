<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'Vinicius Polazi' => 'vinicius.polazi@gmail.com',
            'Natália Miranda Penido' => 'natalia@gmail.com',
            'Ana Paula Barbosa' => 'ana.paula.ap@hotmail.com'
        ]);
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
        $validatedData = $request->validate([
            'razao_social'       => 'required',
            'cnpj'      => 'required|numeric',
            'adress' => 'required',
        ]);

        DB::beginTransaction();
        try{

            $supplier = Supplier::create([
                'razao_social' => $request->razao_social,
                'cnpj' => $request->cnpj,
                'adress' => $request->adress,
                'status'  => 1,
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
