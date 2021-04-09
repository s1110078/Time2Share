<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductFurnitureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $furniture_product_array = ["Table", "Couch", "Bed", "Closet"];

        DB::table('product')->insert([
            'name' => 'Chair',
            'category' => 'furniture',
            'description' => 'Default description for furniture.',
            'image' => '/img/'.'default_furniture.png',
            'user_id' => 1,
            'borrowed' => 2,
            'review_id' => 3,
        ]);


        foreach($furniture_product_array as $furniture) {
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
                'name' => $furniture,
                'category' => 'furniture',
                'description' => 'Default description for furniture.',
                'image' => '/img/' . 'default_furniture.png',
                'user_id' => $rng_user,
                'borrowed' => $borrowed_user,
            ]);
        }
    }
}