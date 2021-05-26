@extends('layouts.app')

@push('pre-js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
@endpush

@push('css')
    <link href="{{ asset('css/users.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
@endpush

@section('content')
    <div class="container">
        <div class="wrapper">
            <div class="card">
            <x-table.datatable
                id="user_data"
                class="table-responsive"
                :for="$users"
                :as="['ID', 'Name', 'Email', 'Created At', 'Is Admin']"
                :view="true"
                :delete="true"
{{--            :edit="false" /* Not set is the same as "false" */ --}}
                route="user"
            />
            </div>
        </div>
    </div>
@endsection