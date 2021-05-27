
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
    @php
    use \Illuminate\Database\Eloquent\Model;
    @endphp

    <div class="container">
        <div class="wrapper">
            <div class="card">
            <!--suppress PhpUndefinedClassInspection : False report-->
            <x-table.datatable
                id="order_data"
                class="table-responsive"
                :for="$orders"
                :as="[
                'ID',
                //'First Name', 'Last Name',
                'Name' => static fn(Model $order) => $order->first_name . ' ' . $order->last_name, //Remap the property (with Dependency injection). ALWAYS SPECIFY THE PARAMETER TYPE OR PHP WILL NOT KNOW WHAT TO PASS HERE!
                'Address', 'Created At',
                'Status' => static fn(int $status) => match ($status){
                                                            0 => 'Cancelled',
                                                            1 => 'Packaging',
                                                            2 => 'En Route',
                                                            3 => 'Completed',
                                                            default => 'Unknown'
                                                        }
                ]"
                :view="true"
                :delete="true"
                :edit="true"
                route="order"
            />
            </div>
        </div>
    </div>
@endsection