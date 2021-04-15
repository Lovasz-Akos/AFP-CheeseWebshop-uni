<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('product.index', ['products' => Product::all()]);
    }


    public function create()
    {
        return view('product.form');
    }

   
    public function store(Request $request)
    {
        Product::create($request->validated());
        return redirect(route('product.index'), 201);
    }

    
    public function show(Product $product)
    {
        return view('product.show', ['product' => $product]);
    }

   
    public function edit(Product $product)
    {
        return view('product.form', ['product' => $product]);
    }

   
    public function update(Request $request, Product $product)
    {
        $product->update($request->validated());
        $product->save();

        return redirect(route('product.show', [$product->id]), 204);
    }

    
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('product.index'));
    }
}
