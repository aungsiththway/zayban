<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code_no'=> fake()->ean8(),
            'name'=> fake()->word(),
            'image'=> fake()->imageUrl(),
            'price'=> fake()->numberBetween(10000, 90000),
            'discount'=> fake()->numberBetween(10, 70),
            'in_stock'=> rand(0,1),
            'description'=> fake()->paragraph(),
            'category_id'=> rand(1, 10),
        ];
    }
}
