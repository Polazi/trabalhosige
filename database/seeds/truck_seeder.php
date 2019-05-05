<?php

use Illuminate\Database\Seeder;

class truck_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trucks')->insert(['placa' => 'PYY-6948', 'marca' => 'Ford', 'modelo' => 'KA 1.0', 'driver_id' => 2, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('trucks')->insert(['placa' => 'PGR-0987', 'marca' => 'Chevrolet', 'modelo' => 'Corsa Wind 1.0', 'driver_id' => 1, 'created_at' => date("Y-m-d H:i:s")]);
    }
}
