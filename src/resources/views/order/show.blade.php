@extends('layouts.app')

@push('css')
    <link href="{{ asset('css/order_show.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
@endpush

@section('content')
    <div class="container">
        <div class="card-container">
        <div class="card">
        <div class="card-head">Order inspection</div>
        <div class="card-body">
                <div class="col">
                    <div class="my-lg-3">{{--  Spacer  --}}&nbsp;&nbsp;</div>
                    <table class="table-bordered">
                        <thead></thead>
                        <tbody>
                            <tr>
                                <th scope="row">ID: </th>
                                <td>{{ $order->id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Name: </th>
                                <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Country: </th>
                                <td>{{ $order->country }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Address: </th>
                                <td>{{ $order->zip_code }} {{ $order->city }}, {{ $order->address }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Status: </th>
                                <td>{{ match($order->status){
                                        0 => 'Cancelled',
                                        1 => 'Packaging',
                                        2 => 'En Route',
                                        3 => 'Completed',
                                        default => 'Unknown'
                                    } }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Created At: </th>
                                <td>{{ $order->created_at }}</td>
                            </tr>
                        </tbody>
                    </table>
{{--                    Probably different card for this table?--}}
                    <table class="table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Sum</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $total = 0 @endphp

                        @foreach($order->products as $product)

                            @php
                                $sum = $product->pivot->amount * $product->price;
                                $total += $sum;
                            @endphp

                            <tr>
                                <td>{{ $product->brand }}: {{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->pivot->amount }}</td>
                                <td>{{ $sum }}</td>
                            </tr>

                        @endforeach
                        <tr>
                            <th scope="row" colspan="3">Total: </th>
                            <td>{{ $total }}</td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="buttons">
                        @if(Auth::user()->is_admin)
                            <a href="{{ route('order.edit', [$order]) }}" class="btn">Edit</a>
                            <x-button.magic class="btn" :route="route('order.destroy', [$order])" method="delete" confirm="Are you sure you wish to delete this item?">Delete</x-button.magic>
                        @endif
                    </div>
                </div>
            <div class="desc">
                <div class="row mx-1 mx-lg-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium ad dignissimos dolore error et, facere maiores nesciunt nulla possimus quam rem! Ad blanditiis dolorem earum ex possimus sapiente veritatis.</p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
@endsection