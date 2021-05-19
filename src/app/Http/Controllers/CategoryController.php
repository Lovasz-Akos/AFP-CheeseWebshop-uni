<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryDestroyRequest;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index', ['categories' => Category::paginate(20)]); //5 is the # displayed per page
    }

    public function create()
    {
        return view('category.form');
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());
        return redirect(route('category.index'), 201);
    }

    public function show(Category $category)
    {
        return view('category.show', ['category' => $category]);
    }

    public function edit(Category $category)
    {
        return view('category.form', ['category' => $category]);
        //front end handle: <input type="text" value="{{ $category?->name }}"></input>"
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        $category->save();

        return redirect(route('category.show', [$category->id]), 204);
    }

    public function destroy(CategoryDestroyRequest $request, Category $category)
    {
        //$request->validated();
        $category->delete();

        return redirect(route('category.index'));
    }
}
