<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductConsolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $consoles_product_array = ["Playstation 5", "Xbox 360", "Nintendo Wii", "Playstation 4"];
        
        DB::table('product')->insert([
            'name' => 'Playstation 3',
            'category' => 'consoles',
            'description' => 'An old fashioned playstation 3.',
            'image' => '/img/'.'default_consoles.png',
            'user_id' => 3,
            'borrowed' => 1,
            'review_id' => 1,
        ]);

        foreach($consoles_product_array as $consoles) {
            $rng_borrow = rand(0, 1);
            $borrowed_user = rand(2, 6);
            $rng_user = rand(1, 6);
            $counter = 1;
            
            if ($rng_borrow == 0){
                if ($rng_user == $borrowed_user)
                    $borrowed_user--;
            } else {
                $borrowed_user = null;
            }


            DB::table('product')->insert([
                'name' => $consoles,
                'category' => 'consoles',
                'description' => 'A ' . $consoles . ' gaming console to play (borrowed) games on.',
                'image' => '/img/' . 'default_consoles.png',
                'user_id' => $rng_user,
                'borrowed' => $borrowed_user,
            ]);
        }

    }
}