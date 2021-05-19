@extends('layouts.app')

@push('css')
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
@endpush

@section('content')

<?php
    use Illuminate\Database\Eloquent\Collection;
    /** @var Collection $categories */
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="category-label">
                    <div class="card-body">Select a category from below to filter displayed products</div>
                </div>
            </div>
            <div class="card">
                <div class="card-head">Product Categories</div>
                <div class="card-body">
                    <div class="wrapper">
                        @foreach($categories as $category)
                            <a href="">
                                <div class="wrapper-content">
                                    {{ $category->name }}
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection