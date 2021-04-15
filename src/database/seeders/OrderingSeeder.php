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

            $products = Product::sample(random_int(0,10));
            foreach ($products as $product) {
                $order->products()->attach($product, ['amount'=>random_int(1,8)]);
            }
        }
    }
}
