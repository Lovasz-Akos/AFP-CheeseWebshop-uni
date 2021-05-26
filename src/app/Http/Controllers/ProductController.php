<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Utils\RequestMap;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('product.index', ['products' => Product::paginate(18)]);
    }


    public function create()
    {
        return view('product.form', [
            'categories' => Category::all()->map(fn($item) => $item->name)
        ]);
    }


    public function store(ProductRequest $request)
    {
        $validated = RequestMap::nameToID($request, Category::class);
        Product::create($validated);
        return redirect(route('product.index'));
    }


    public function show(Product $product)
    {
        return view('product.show', ['product' => $product]);
    }


    public function edit(Product $product)
    {
        return view('product.form', [
            'product' => $product,
            'categories' => Category::all()->map(fn($item) => $item->name)
        ]);
    }


    public function update(ProductRequest $request, Product $product)
    {
        $product->update(RequestMap::nameToID($request, Category::class));
        $product->save();

        return redirect(route('product.show', [$product->id]));
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('product.index'));
    }
}