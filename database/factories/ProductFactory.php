<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
    return [
        'name' => fake()->words(3, true),
        'price' => fake()->numberBetween(2000, 50000),
        'stock' => fake()->numberBetween(5, 100),
        'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
    ];
}
}
