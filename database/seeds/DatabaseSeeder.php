<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(driver_seeder::class);
        $this->call(truck_seeder::class);
        $this->call(supplier_seeder::class);
        $this->call(franchise_seeder::class);
        $this->call(ProductCategorieSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
