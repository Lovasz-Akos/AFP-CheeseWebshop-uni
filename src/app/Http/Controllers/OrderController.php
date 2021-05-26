<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        return view('order.index', ['orders' => Order::paginate(30)]);
    }


    public function create(Product $product)
    {
        return view('order.form', ['product' => $product]);
    }

   
    public function store(OrderRequest $request)
    {
        $validated = $request->validated();
        $product = $validated['product'];
        unset($validated['product']);

        /** @var Order $order */
        $order = Order::create($validated);
        $order->products()->attach($product, ['amount' => 1]);
        $order->save();

        return redirect(route('order.show', [$order]));
    }

    
    public function show(Order $order)
    {
        return view('order.show', ['order' => $order]);
    }

   
    public function edit(Order $order)
    {
        return view('order.form', ['order' => $order]);
    }

   
    public function update(OrderRequest $request, Order $order)
    {
        $order->update($request->validated());
        $order->save();

        return redirect(route('order.show', [$order]));
    }

    
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect(route('order.index'));
    }
}
