@extends('layouts.app')

@push('css')
    <link href="{{ asset('css/order.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
@endpush

@section('content')
    @php
        $order = $order ?? null; //If you do not set a variable it throws an error, so we set it to something easy to check
        $product = $product ?? null;
    @endphp
    <div class="container">
        <div class="wrapper row">
            <div class="col-auto col-lg-3"></div>
            <div class="card col-12 col-lg-6">
                <div class="card-head">
                    Order
                </div>
                <div class="card-body">
                <x-form
                    :to="$order ? route('order.update', [$order]) : route('order.store')"
                    :method="$order ? 'put' : 'post'"
                    :allowFile="true"
                    >
                        <x-form.input name="first_name"
                                      class="my-3"
                                      placeholder=""
                                      :value="old('first_name') ?? $order?->first_name ?? ''"
                                      :required="true">
                            First Name
                        </x-form.input>
                        <x-form.input name="last_name"
                                      class="my-3"
                                      placeholder=""
                                      :value="old('last_name') ?? $order?->last_name ?? ''"
                                      :required="true">
                            Last Name
                        </x-form.input>
                        <x-form.input name="country"
                                      class="my-3"
                                      placeholder=""
                                      :value="old('country') ?? $order?->country ?? 'Hungary'"
                                      :required="true">
                            Country
                        </x-form.input>
                        <x-form.input name="zip_code"
                                      class="my-3"
                                      placeholder="1111"
                                      :value="old('zip_code') ?? $order?->zip_code ?? ''"
                                      :required="true">
                            Zip code
                        </x-form.input>
                        <x-form.input name="city"
                                      class="my-3"
                                      placeholder="1111"
                                      :value="old('city') ?? $order?->city ?? ''"
                                      :required="true">
                            City
                        </x-form.input>
                        <x-form.input name="address"
                                      class="my-3"
                                      placeholder=""
                                      :value="old('address') ?? $order?->address ?? ''"
                                      :required="true">
                            Address (Street, house number)
                        </x-form.input>
                        <x-form.input type="hidden"
                                      name="product"
                                      :value="old('product') ?? $product?->id" />
                        <div class="submit-button"><x-form.submit /></div>
                    </x-form>
                </div>
            </div>
            <div class="col-auto col-lg-3"></div>
        </div>
    </div>
@endsection