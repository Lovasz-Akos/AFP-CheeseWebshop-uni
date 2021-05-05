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
                <img src="../img/product_img.png" width="100px" height="100px"> <!-- placeholder img -->
                <div class="product-details">
                Brand: {{ $product->brand }} <br>
                Price: {{ $product->price }} <br>
                In stock: {{ $product->in_stock }} <br>
                </div>
                <p>{{ $product->short_description }}</p>
                <div class="card-button">
                    <form action="">
                        <button class="btn" type="submit">Place Order</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
{{ $products->links() }}
</div>
@endsection