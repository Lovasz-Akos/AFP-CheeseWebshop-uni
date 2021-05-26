@extends('layouts.app')
@push('css')
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
@endpush
@section('content')
    <div class="container">
        <div class="card-container">
        <div class="card">
        <div class="card-head">
                            {{ $user->name }}
                        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="{{ asset('img/user_placeholder.png') }}" class="img-thumbnail w-50 float-end rounded-circle"  alt="user_profile"/>
            </div>
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="col-auto">
                        <table class="table-responsive">
                            <thead/>
                            <tbody>
                            <tr>
                                <th scope="row">Email: </th>
                                <td><span class="ms-2">{{ $user->email }}</span></td>
                            </tr>
                            <tr>
                                <th scope="row">Registered at: </th>
                                <td><span class="ms-2">{{ $user->email }}</span></td>
                            </tr>
                            @if(Auth::user()->is_admin)
                                <tr>
                                    <th scope="row">Is admin: </th>
                                    <td><span class="ms-2">{{ $user->is_admin ? 'Yes' : 'No' }}</span></td>
                                </tr>
                            @endif
                            <tr>
                                <div class="buttons">
                                <td>
                                    @if ($user->id === Auth::id())
                                        <a class="btn btn-primary" href="{{ route('user.edit', [$user]) }}">Edit</a>
                                    @elseif(Auth::user()->is_admin)
                                        <x-button.magic
                                            :route="route('user.setAdmin', [$user])"
                                            method="patch"
                                            confirm="Are you sure?"
                                            :parameters="['is_admin' => !($user->is_admin)]"
                                            class="btn btn-warning"
                                        >
                                                {{ $user->is_admin ? 'Revoke admin' : 'Grant admin' }}
                                        </x-button.magic>
                                    @endif
                                </td>

                                <td>
                                    <x-button.magic
                                        :route="route('user.destroy', [$user])"
                                        method="delete"
                                        confirm="Are you sure you want to delete this user? This can not be undone!"
                                        class="btn btn-danger"
                                    >
                                        Delete
                                    </x-button.magic>
                                </td>
                                </div>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>
    </div>
@endsection