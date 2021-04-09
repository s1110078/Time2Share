<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductGamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games_product_array = ["Skyrim", "Elder Scrolls Online", "Warframe", "Call of Duty"];

        foreach($games_product_array as $games) {
            $rng_borrow = rand(0, 1);
            $borrowed_user = rand(2, 6);
            $rng_user = rand(1, 6);
            
            if ($rng_borrow == 0){
                if ($rng_user == $borrowed_user)
                    $borrowed_user--;
            } else {
                $borrowed_user = null;
            }

            DB::table('product')->insert([
                'name' => $games,
                'category' => 'games',
                'description' => 'The default description for games.',
                'image' => '/img/' . 'default_games.png',
                'user_id' => $rng_user,
                'borrowed' => $borrowed_user,
            ]);
        }
    }
}