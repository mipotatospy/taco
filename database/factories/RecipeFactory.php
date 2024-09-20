<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = Category::all()->pluck('id')->toArray(); 

        return [
            'name' => fake()->lastName(),
            'description' => fake()->catchPhrase(),
            'category_id' => fake()->randomElement($categories),
            'procedure' => fake()->realText(100),
            'picture' => Str::random(10),
        ];
    }
}
