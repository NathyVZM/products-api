<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            array(
                'name' => 'Crispy chicek Hamburguer',
                'quantity' => 20,
                'price' => 7.5,
                'image' => 'hamburguer_chicken',
                'status' => true,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Potato Hamburguer',
                'quantity' => 5,
                'price' => 5,
                'image' => 'hamburguer_potato',
                'status' => false,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Pepperoni Pizza',
                'quantity' => 18,
                'price' => 10,
                'image' => 'pizza_pepperoni',
                'status' => true,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Vegetarian Pizza',
                'quantity' => 30,
                'price' => 12,
                'image' => 'pizza_vegetarian',
                'status' => true,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => 'Ham and Corn Pizza',
                'quantity' => 5,
                'price' => 6,
                'image' => 'pizza_ham_corn',
                'status' => true,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            )
        ];

        DB::table('products')->insert($data);
    }
}
