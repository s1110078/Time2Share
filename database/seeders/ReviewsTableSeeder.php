<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews_array = ['This product is in good condition.', 'This product sucks.', 'This product is missing pieces.'];
        $counter = 1;

        foreach($reviews_array as $review){
            DB::table('reviews')->insert([
                'user_id' => $counter,
                'product_id' => $counter,
                'review' => $review,
            ]);
            $counter++;
        }

        DB::table('reviews')->insert([
            'user_id' => 1,
            'product_id' => 3,
            'review' => 'The Xbox 360 is a nice console to use for FPS games.'
        ]);

        DB::table('reviews')->insert([
            'user_id' => 2,
            'product_id' => 3,
            'review' => 'Red ring of death!'
        ]);

    }
}

