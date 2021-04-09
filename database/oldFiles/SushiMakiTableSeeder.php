<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SushiMakiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maki_sushi_array = ["Cumcumber", "Tamago", "Tuna", "Kani"];

        foreach($maki_sushi_array as $maki) {
            DB::table('sushi')->insert([
                'name' => $maki,
                'kind' => "Maki",
                'description' => "A delicious Maki with " . $maki,
            ]);
        }

        DB::table('sushi')->insert([
            'name' => "Tuna",
            'kind' => "Maki",
            'image' => '/img/tuna_maki.jpg',
            'description' => "A delicious Maki with " . $maki,
        ]);
    }
}
