<?php

namespace Database\Seeders;

use App\Models\Tenants;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TenantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenants::truncate();
        Tenants::insert([
                'name' => Str::random(10),
                'address' => Str::random(10),
                'phone' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'nid' => Str::random(10),

        ]);
    }
}
