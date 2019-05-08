<?php

use Illuminate\Database\Seeder;

class ProductCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert(['description' => 'Frios', 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('product_categories')->insert(['description' => 'Pães', 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('product_categories')->insert(['description' => 'Carne', 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('product_categories')->insert(['description' => 'Condimentos', 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('product_categories')->insert(['description' => 'Hortifruti', 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('product_categories')->insert(['description' => 'Bebidas', 'created_at' => date("Y-m-d H:i:s")]);
    }
}
