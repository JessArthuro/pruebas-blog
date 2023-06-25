<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(); // define una palabra faker pero ya no se puede declarar la longitud de esa palabra

        return [
            'name' => $name,
            'slug' => Str::slug($name)
        ];
    }
}
