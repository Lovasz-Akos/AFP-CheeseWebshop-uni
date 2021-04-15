<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'address' => $this->faker->address,
            'zip_code' => $this->faker->numberBetween(1000, 9999),
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'status' => $this->faker->numberBetween(0,3), //subject to change
        ];
    }
}
