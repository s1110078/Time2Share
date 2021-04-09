<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usernames_array = ["Adrianne Avenicci", "Alduin Akatosh", "Maiq the liar", "Paarthurnax", "Septimus Signus", "Cicero"];
        $roles = ["Admin", "Lender", "Borrower"];
        $counter = 1;
        $review_id = 1;

        foreach($usernames_array as $usernames) {
            $review_id = $counter;
            if ($counter > 3)
                $review_id = null;
                
            
            DB::table('users')->insert([
                'name' => $usernames,
                'email' => substr($usernames, 0, 2)."@time2share.nl",
                'password' => bcrypt('laravel'),
                'role' => $roles[rand(0,2)],
                'review' => $review_id,
            ]);
            $counter++;
        }
    }
}

