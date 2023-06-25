<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence(); // el metodo sentence define la cantidad de palabras y cuantas letras quieres que tenga cada palabra
        $category = Category::inRandomOrder()->first();
        $user = User::inRandomOrder()->first(); // de manera random buscara de todos los usuarios y se asignara el primero que encuentre

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'extract' => $this->faker->text(250),
            'body' => $this->faker->text(2000),
            'status' => $this->faker->randomElement([1, 2]), // faker asignara el status 1 o 2 a cada post de manera random
            'category_id' => $category->id,
            'user_id' => $user->id,
        ];
    }
}
