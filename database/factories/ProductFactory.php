<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        static $order = 1; 
        $parent = Product::all()->pluck('id')->toArray(); 

        return [
            'id' => $order++,
            'parent_id'=>fake()->numberBetween(1, 50),
            'name' => fake()->word(),
            'transportation' => fake()->paragraph(),
            'seasonality' => fake()->boolean(),
            'packaging' => fake()->paragraph(),
            'procedure' => fake()->paragraph(),
            'ingredients' => fake()->word(),
            'picture' => Str::random(10),
            'parent_id' => fake()->randomElement($parent),
            'expiration' => fake()->date('Y_m_d'),
        ];
    }
}

