@extends('layouts.app')

@push('css')
    <link href="{{ asset('css/product_show.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
@endpush

@section('content')
    <div class="container">
        <div class="wrapper card">
            <div class="row mx-1 mx-lg-4">
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/product_img.png') }}" alt="">
                </div>
                <div class="col-12 col-lg-8">
                    <h2 class="m-lg-3">{{ $product->name }}</h2>
                    <div class="my-lg-3">{{--  Spacer  --}}&nbsp;&nbsp;</div>
                    <x-table.details class="m-1 m-lg-4"
                                     tdClass="p-1 px-3"
                                     :model="$product"
                                     :properties="[
                                     'brand',
                                     'price',
                                     'Stock' => 'in_stock', //Remap a name, so it's not just title case of the property
                                     'description'
                                    ]"
                    />
                    <div class="buttons">
                        <a href="{{ route('order.create', [$product]) }}" class="btn">Place order</a>
                        @if(Auth::user()->is_admin)
                            <a href="{{ route('product.edit', [$product]) }}" class="btn">Edit</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="desc">
                <div class="row mx-1 mx-lg-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium ad dignissimos dolore error et, facere maiores nesciunt nulla possimus quam rem! Ad blanditiis dolorem earum ex possimus sapiente veritatis.
                </div>
            </div>
        </div>
    </div>
@endsection