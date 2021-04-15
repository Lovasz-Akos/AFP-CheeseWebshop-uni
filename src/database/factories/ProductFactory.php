<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'brand' => $this->faker->word,
            'name' => $this->faker->sentence(3),
            'price' => $this->faker->numberBetween(1000, 100_000),
            'in_stock' => $this->faker->numberBetween(0, 1000),
            'description' => $this->faker->paragraph(6),
            'short_description' => $this->faker->paragraph(2),
            'category_id' => Category::random()->id
        ];
    }
}
