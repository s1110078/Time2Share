<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images_array = ['default_consoles.jpg', 'default_profile.png', 'default_games.png', 'default_furniture.png', 'default_electronics.png', 'default_misc.png'];

        foreach($images_array as $image){
            DB::table('images')->insert([
                'image' => '/img/' . $image
            ]);
        }
    }
}
