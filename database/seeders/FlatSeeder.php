<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flats;
use App\Models\Properties;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class FlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Flats::truncate();
        $getProperties = Properties::take(50)->get();
        $faker = Faker::create('App\Models\Flats');

        foreach ($getProperties ?? [] as $property) {
            Flats::create([
                'property_id' => $property->id,
                'flat_no' => $faker->randomNumber(4),
                'size' => $faker->randomNumber(2),
                'details' => $faker->sentence(6)
            ]);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
