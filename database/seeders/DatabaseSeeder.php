<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoryOfProductTableSeeder::class,
            ReviewsTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            ProductConsolesTableSeeder::class,
            ProductElectronicsTableSeeder::class,
            ProductFurnitureTableSeeder::class,
            ProductGamesTableSeeder::class,
            ProductMiscellaneousTableSeeder::class,
            ImagesTableSeeder::class,

        ]);
    }
}
