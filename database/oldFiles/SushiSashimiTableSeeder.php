<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SushiSashimiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sashimi_sushi_array = ["Maguro", "Sake", "Amaebi", "Ebi", "Tamago", "Anago"];

        foreach($sashimi_sushi_array as $sashimi) {
            DB::table('sushi')->insert([
                'name' => $sashimi,
                'kind' => "Sashimi",
                'description' => "A delicious big piece of raw " . $sashimi,
            ]);
        }
        /*
        DB::table('sushi')->insert([
            'name' => $sashimi,
            'kind' => "Sashimi",
            'image' => '/img/salmon_sashimi.jpg',
            'description' => "A delicious big piece of raw " . $sashimi,
        ]);*/
    }
}
