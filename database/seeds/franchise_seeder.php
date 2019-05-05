<?php

use Illuminate\Database\Seeder;

class franchise_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('franchises')->insert(['razao_social' => 'Franquia da McDonnalds Número 1', 'cnpj' => '123.098.56/0001.98', 'status' => 1, 'adress' => 'Rua Francisco Bicalho, 339', 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('franchises')->insert(['razao_social' => 'Franquia da McDonnalds Número 2', 'cnpj' => '456.098.56/0001.98', 'status' => 1, 'adress' => 'Rua Padre Eustáquio 1881', 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('franchises')->insert(['razao_social' => 'Franquia da McDonnalds Número 3', 'cnpj' => '789.098.56/0001.98', 'status' => 0, 'adress' => 'Rua Pará de Minas, 908','created_at' => date("Y-m-d H:i:s")]);
    }
}
