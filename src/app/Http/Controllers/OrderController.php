<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        return view('order.index', ['order' => Order::all()]);
    }


    public function create()
    {
        return view('order.form');
    }

   
    public function store(Request $request)
    {
        Order::create($request->validated());
        return redirect(route('order.index'));
    }

    
    public function show(Order $order)
    {
        return view('order.show', ['order' => $order]);
    }

   
    public function edit(Order $order)
    {
        return view('order.form', ['order' => $order]);
    }

   
    public function update(Request $request, Order $order)
    {
        $order->update($request->validated());
        $order->save();

        return redirect(route('order.show', [$order->id]));
    }

    
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect(route('order.index'));
    }
}
