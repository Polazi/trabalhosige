<?php

use Illuminate\Database\Seeder;

class driver_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert(['name' => 'Vinicius Polazi de Sousa', 'age' => 25, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('drivers')->insert(['name' => 'Ana Paula Barbosa', 'age' => 30, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('drivers')->insert(['name' => 'Leonardo Angelo Polazi Resende', 'age' => 18, 'created_at' => date("Y-m-d H:i:s")]);
    }
}
