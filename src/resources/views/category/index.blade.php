@extends('layouts.app')

@push('css')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
@endpush

@section('content')

<?php
    use Illuminate\Database\Eloquent\Collection;
    /** @var Collection $categories */
?>
<table>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection