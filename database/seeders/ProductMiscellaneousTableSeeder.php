<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductMiscellaneousTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $miscellaneous_product_array = ["Bag", "Cups", "Utensils", "Rug"];

        foreach($miscellaneous_product_array as $miscellaneous) {
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
                'name' => $miscellaneous,
                'category' => 'miscellaneous',
                'description' => 'The default description for miscellaneous products.',
                'image' => '/img/' . 'default_misc.png',
                'user_id' => $rng_user,
                'borrowed' => $borrowed_user,
            ]);
        }
    }
}