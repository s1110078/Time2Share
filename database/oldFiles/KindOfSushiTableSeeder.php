<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KindOfSushiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kind_of_sushi_array = ["Nigiri", "Maki", "Temaki", "Uramaki", "Sashimi"];

        foreach($kind_of_sushi_array as $kind_of_sushi) {
            DB::table('kind_of_sushi')->insert([
                'kind' => $kind_of_sushi
            ]);    
        }
        
    }
}
