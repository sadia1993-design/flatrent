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

        \App\Models\Properties::factory(100)->create();


        $this->call([
            UserSeeder::class,
            // FlatSeeder::class,
            TenantsSeeder::class

        ]);

    }
}
