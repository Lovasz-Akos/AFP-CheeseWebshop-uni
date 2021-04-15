<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::factory(50)->create();
    }
}
