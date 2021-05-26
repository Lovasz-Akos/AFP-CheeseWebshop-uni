@extends('layouts.app')

@push('css')
    <link href="{{ asset('css/product_show.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
@endpush

@section('content')
    @php
        $product = $product ?? null; //If you do not set a variable it throws an error, so we set it to something easy to check
    @endphp
    <div class="container">
        <div class="wrapper row">
            <div class="col-auto col-lg-3"></div>
            <div class="card col-12 col-lg-6">
                <div class="card-head">
                    Edit Product
                </div>
                <div class="card-body">
                <x-form
                        :to="$product ? route('product.update', [$product]) : route('product.store')"
                        :method="$product ? 'put' : 'post'"
                        :allowFile="true"
                    >
                        <x-form.input name="brand"
                                      class="my-3"
                                      placeholder="Something"
                                      :value="old('brand') ?? $product?->brand ?? ''"
                                      :required="true">
                            Brand
                        </x-form.input>
                        <x-form.input name="name"
                                      class="my-3"
                                      placeholder="Some Name"
                                      :value="old('name') ?? $product?->name ?? ''"
                                      :required="true">
                            Product Name
                        </x-form.input>
                        <x-form.input type="number"
                                      name="price"
                                      class="my-3"
                                      :value="old('price') ?? $product?->price ?? ''"
                                      :required="true">
                            Price
                        </x-form.input>
                        <x-form.input type="number"
                                      name="in_stock"
                                      class="my-3"
                                      :value="old('in_stock') ?? $product?->in_stock ?? ''">
                            Stock
                        </x-form.input>
                        <x-form.input type="textarea"
                                      name="short_description"
                                      class="my-3"
                                      :value="old('short_description') ?? $product?->short_description ?? ''"
                                      :required="true">
                            Short Description
                        </x-form.input>
                        <x-form.input type="textarea"
                                      name="description"
                                      class="my-3"
                                      :value="old('short_description') ?? $product?->short_description ?? ''"
                                      :required="true">
                            Long Description
                        </x-form.input>
                        <x-form.input type="select"
                                      :options="$categories"
                                      name="category"
                                      class="my-3"
                                      :value="old('category') ?? $product?->category?->name ?? ''"
                                      :required="true">
                            Category
                        </x-form.input>
                        <x-form.input type="file"
                                      name="image"
                                      class="my-3 form-file-input"
                        >
                        </x-form.input>
                        <div class="submit-button"><x-form.submit /></div>
                    </x-form>
                </div>
            </div>
            <div class="col-auto col-lg-3"></div>
        </div>
    </div>
@endsection