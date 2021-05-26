@extends("layouts.app")
@push('css')
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
@endpush
@section("content")
<div class="container">
    <div class="wrapper">
        @foreach($products as $product)
        <div class="card">
            <div class="card-head">{{ $product->name }}</div>
            <div class="card-body">
            <img src="{{ asset($product->image ?? 'img/product_img.png') }}" width="100px" height="100px" alt=""> <!-- placeholder img -->
                <div class="product-details">
                Brand: {{ $product->brand }} <br>
                Price: {{ $product->price }} <br>
                </div>
                <p>{{ $product->short_description }}</p>
                <div class="card-button">
                    <a href="{{ route('product.show', [$product]) }}" class="btn btn-warning">Details &gtcc;</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
{{ $products->links() }}
</div>
@endsection