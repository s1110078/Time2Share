<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductElectronicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $electronics_product_array = ["Drill", "Vacuum", "Charger"];

        DB::table('product')->insert([
            'name' => 'Chainsaw',
            'category' => 'electronics',
            'description' => 'A household chainsaw for assistance.',
            'image' => '/img/'.'default_electronics.png',
            'user_id' => 3,
            'borrowed' => 5,
            'review_id' => 2,
        ]);

        foreach($electronics_product_array as $electronics) {
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
                'name' => $electronics,
                'category' => 'electronics',
                'description' => 'A household ' . $electronics . ' for assistance.',
                'image' => '/img/' . 'default_electronics.png',
                'user_id' => $rng_user,
                'borrowed' => $borrowed_user,
            ]);
        }
    }
}