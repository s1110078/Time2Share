<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class WineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wine_array = ["Pinot", "Savignon", "Syrah"];

        foreach($wine_array as $wine) {
            DB::table('drinks')->insert([
                'name' => $wine,
                'kind' => "Wine",
                'image' => "/img/wine.jpg",
                'description' => "Default wine description",
            ]);    
        }
    }
}
