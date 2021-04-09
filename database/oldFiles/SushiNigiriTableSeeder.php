<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SushiNigiriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nigiri_sushi_array = ["Maguro", "Sake", "Amaebi", "Ebi", "Tamago", "Anago"];

        foreach($nigiri_sushi_array as $nigiri) {
            DB::table('sushi')->insert([
                'name' => $nigiri,
                'kind' => "Nigiri",
                'description' => "A single sushi piece with " . $nigiri . " on top",
            ]);
        }
    }
}
