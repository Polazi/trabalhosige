<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(['name' => 'Pão de hamburger', 'description' => 'Pão de Hamburger do tamanho X', 'unity' => 'PCT', 'unity_value' => 5.6, 'product_categorie_id' => 2, 'supplier_id' => 2, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('products')->insert(['name' => 'Queijo Prato', 'description' => 'Queijo prato da melhor qualidade', 'unity' => 'KG', 'unity_value' => 8.4, 'product_categorie_id' => 1, 'supplier_id' => 1, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('products')->insert(['name' => 'Carne de Boi', 'description' => 'Carne de boi para a produção de hambúrger', 'unity' => 'KG', 'unity_value' => 31.5, 'product_categorie_id' => 3, 'supplier_id' => 3, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('products')->insert(['name' => 'Alface Crespa', 'description' => 'Alface para colocar nos hambúrgeres', 'unity' => 'KG', 'unity_value' => 1.2, 'product_categorie_id' => 5, 'supplier_id' => 2, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('products')->insert(['name' => 'Refrigerante de Uva', 'description' => 'Refrigerante muito bom', 'unity' => 'Litros', 'unity_value' => 2.1, 'product_categorie_id' => 6, 'supplier_id' => 2, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('products')->insert(['name' => 'Ketchup', 'description' => 'Caixa de Ketchup com 200 unidades', 'unity' => 'CX', 'unity_value' => 6.99, 'product_categorie_id' => 4, 'supplier_id' => 1, 'created_at' => date("Y-m-d H:i:s")]);
    }
}
