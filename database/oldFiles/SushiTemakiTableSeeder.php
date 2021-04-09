<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SushiTemakiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $temaki_sushi_array = ["Maguro", "Sake", "Amaebi", "Ebi", "Tamago", "Anago"];

        foreach($temaki_sushi_array as $temaki) {
            DB::table('sushi')->insert([
                'name' => $temaki,
                'kind' => "Temaki",
                'image' => '/img/default_temaki.jpg',
                'description' => 'A \'Puntzak\' sushi with a big piece of ' . $temaki . " inside",
            ]);
        }
    }
}
