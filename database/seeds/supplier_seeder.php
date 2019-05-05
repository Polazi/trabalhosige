<?php

use Illuminate\Database\Seeder;

class supplier_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert(['razao_social' => 'Fornecedor da McDonnalds Número 1', 'cnpj' => '098.876.56/0001.32', 'adress' => 'Rua Do Ouro 98', 'status' => 1, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('suppliers')->insert(['razao_social' => 'Fornecedor da McDonnalds Número 2', 'cnpj' => '674.300.72/0001.98', 'adress' => 'Rua Fora Temer, 666','status' => 1, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('suppliers')->insert(['razao_social' => 'Fornecedor da McDonnalds Número 3', 'cnpj' => '812.097.02/0001.66', 'adress' => 'Rua Bolsolixo, 171','status' => 0, 'created_at' => date("Y-m-d H:i:s")]);
    }
}
