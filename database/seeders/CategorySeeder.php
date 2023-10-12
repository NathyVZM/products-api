<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            'name' => 'Burguers',
            'icon' => 'burguer-icon',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Pizzas',
            'icon' => 'pizza-icon',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Hot Dogs',
            'icon' => 'hotdog-icon',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
