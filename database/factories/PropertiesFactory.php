<?php

namespace Database\Factories;

use App\Models\Properties;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Properties::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->text
        ];
    }
}
