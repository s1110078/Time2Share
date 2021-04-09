<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SushiUramakiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uramaki_sushi_array = ["Maguro", "Sake", "Amaebi", "Ebi", "Tamago", "Anago"];

        foreach($uramaki_sushi_array as $uramaki) {
            DB::table('sushi')->insert([
                'name' => $uramaki,
                'kind' => "Uramaki",
                'description' => "A sushi with " . $uramaki . " inside it and rice on the outside",
            ]);
        }
    }
}
