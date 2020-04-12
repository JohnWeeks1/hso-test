<?php

use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('order_product')
            ->insert([
                'order_id' => 1,
                'product_id' => 1
            ]);

        \Illuminate\Support\Facades\DB::table('order_product')
            ->insert([
                'order_id' => 1,
                'product_id' => 4
            ]);
    }
}
