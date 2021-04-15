<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;

class OrderingSeeder extends Seeder
{
    public function run()
    {
        /**@var Order $order */
        foreach(Order::all() as $order){
            $order->products()->attach(Product::random(), ['amount'=>3]);
        }
    }
}
