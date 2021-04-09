<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KindOfDrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kind_of_drinks_array = ["Beer", "Wine", "Sake"];

        foreach($kind_of_drinks_array as $kind_of_drinks) {
            DB::table('kind_of_drinks')->insert([
                'kind' => $kind_of_drinks
            ]);    
        }
    }
}
