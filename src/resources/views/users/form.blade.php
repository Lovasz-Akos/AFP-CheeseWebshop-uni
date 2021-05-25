@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="wrapper row">
            <div class="col-auto col-lg-3"></div>
            <div class="card col-12 col-lg-6">
                <div class="card-header">
                    <h4>Edit my Profile</h4>
                </div>
                <div class="card-body">
                    <x-form :to="route('user.update', [$user])" method="put">
                        <x-form.input name="name"
                                      class="my-3"
                                      placeholder="Some Name"
                                      :value="old('name') ?? $user->name ?? ''"
                                      :required="true">
                            Full name
                        </x-form.input>
                        <x-form.input type="email"
                                      name="email"
                                      class="my-3"
                                      placeholder="someone@example.com"
                                      :value="old('email') ?? $user->email ?? ''"
                                      :required="true">
                            Email address
                        </x-form.input>
                        <x-divider />
                        <x-form.input type="password"
                                      name="password"
                                      class="my-3"
                                      placeholder="********">
                            New Password
                        </x-form.input>
                        <x-form.input type="password"
                                      name="password_confirmation"
                                      class="my-3"
                                      placeholder="********">
                            Confirm new Password
                        </x-form.input>
                        <x-divider />
                        <x-form.input type="password"
                                      name="current_password"
                                      class="my-3"
                                      placeholder="********"
                                      :required="true">
                            Current Password
                        </x-form.input>

                        <x-form.submit />
                    </x-form>
                </div>
            </div>
            <div class="col-auto col-lg-3"></div>
        </div>
    </div>
@endsection