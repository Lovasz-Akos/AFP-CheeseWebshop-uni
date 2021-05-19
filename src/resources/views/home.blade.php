@extends('layouts.app')

@push('css')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div class="home-card" >
            <div class="card">
                <div class="card-head">
                Welcome to Cheesy, {{ Auth::user()->name }}
                </div>
                <div class="card-body">
                    <div class="top-text">Choose where you would like to go, using the navigation bar</div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
