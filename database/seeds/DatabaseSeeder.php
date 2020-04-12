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
         $this->call(AccountsTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(StagesTableSeeder::class);
         $this->call(OrdersTableSeeder::class);
         $this->call(OrderProductTableSeeder::class);
    }
}
