<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BeerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beer_array = ["Asahi", "Sapporo", "Iki"];

        foreach($beer_array as $beer) {
            DB::table('drinks')->insert([
                'name' => $beer,
                'kind' => "Beer",
                'image' => "/img/wine.jpg",
                'description' => "This is the default beer description",
            ]);    
        }
    }
}
