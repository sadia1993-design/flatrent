<?php

namespace Database\Seeders;

use App\Models\Tenants;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class TenantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('App\Models\Tenants');

        for($i=1; $i<=50; $i++){
            Tenants::create([
                'name' => $faker->name,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'email' => Str::random(10) . '@gmail.com',
                'nid' => $faker->numberBetween(10000000, 99999999)
            ]);
        }


    }
}
