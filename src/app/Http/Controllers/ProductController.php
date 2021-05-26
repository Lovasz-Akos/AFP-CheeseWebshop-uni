<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Utils\RequestMap;
use Illuminate\Support\Str;

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
        if($request->file()){
            $validated['image'] = $request->file('image')?->
            move('img/products',
                 Str::random() . $request->file('image')?->getClientOriginalExtension()
            );
        }
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
        $validated = RequestMap::nameToID($request, Category::class);
        if($request->file()){
            $validated['image'] = $request->file('image')?->
            move('img/products',
                            Str::random() . $request->file('image')?->getClientOriginalExtension()
            );
        }
        $product->update($validated);
        $product->save();

        return redirect(route('product.show', [$product->id]));
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('product.index'));
    }
}