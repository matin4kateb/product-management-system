<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sku' => 'PRD-'.$this->faker->unique()->bothify('??####??####'),
            'name' => $this->faker->words(3, true),
            'price' => $this->faker->randomFloat(2, 5, 100000),
            'description' => $this->faker->optional()->paragraph(),
            'quantity' => $this->faker->numberBetween(0, 200),
            'status' => 'active',
        ];
    }
}
