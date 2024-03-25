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
        return [
            'price' => $this->faker->randomFloat(2, 0, 10000),
            'assessment' => $this->faker->numberBetween(0, 10),
            'description' => $this->faker->sentence,
            'quantity_stock' => $this->faker->numberBetween(0, 5000),
            'sales_quanity' => $this->faker->numberBetween(0, 100)
        ];
    }
}
