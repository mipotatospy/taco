<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        /*
        $table->integer('id')->primary()->unique()->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();  
            $table->string('name');
            $table->string('transportation');
            $table->boolean('seasonality');
            $table->string('packaging');
            $table->string('procedure');
            $table->string('ingredients');
            $table->string('picture');
            $table->date('expiration');
        */
        return [
            /*'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'expiration' => fake()->date('-30 years', '-19years'),
            'seasonality' => fake()->boolean(),
            'height' => fake()->numberBetween(170, 200),
            'user_id' => fake()->randomElement($usersIDs),*/
        ];
    }
}
