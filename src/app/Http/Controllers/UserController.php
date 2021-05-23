<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Utils\StatusCode;
use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\{Factory as ViewFactory, View};
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class UserController extends Controller
{

    public function index(): ViewFactory|View|Application
    {
        return view('users.index', ['users' => User::all()]);
    }

    public function profile(): ViewFactory|View|Application
    {
        return view('users.show', ['user' => Auth::user()]);
    }

    public function show(User $user): View|ViewFactory|Redirector|RedirectResponse|Application
    {
        if(Auth::user()->id === $user->id || Auth::user()->is_admin){
            return view('users.show', ['user' => $user]);
        }

        abort(StatusCode::FORBIDDEN, 'You can not view another user\'s profile' );
        return redirect(route('welcome')) ; //Actually this should be unreachable... except if the user has javascript disabled. Possible with adBlocker (?)
    }


    public function edit(User $user): View|ViewFactory|Redirector|RedirectResponse|Application
    {
        if(Auth::user()->id === $user->id){ //Even admins shouldn't be able to play with profiles
            return view('users.form', ['user' => $user]);
        }

        abort(StatusCode::FORBIDDEN, 'You can not edit another user\'s profile' );
        return redirect(route('welcome')) ; //Actually this should be unreachable... except if the user has javascript disabled. Possible with adBlocker (?)
    }

    public function update(UserRequest $request, User $user): Redirector|Application|RedirectResponse
    {
        if(Auth::user()->id === $user->id){
            $user->update($request->validated());
            $user->save();
            return redirect(route('user.show', [$user]));
        }

        abort(StatusCode::FORBIDDEN, 'You can not edit another user\'s profile' );
        return redirect(route('welcome')) ; //Actually this should be unreachable... except if the user has javascript disabled. Possible with adBlocker (?)
    }


    public function destroy(User $user): Redirector|Application|RedirectResponse
    {
        if(Auth::user()->id === $user->id){
            $user->delete();
            Auth::logout();
            return redirect(route('welcome'))->with('toast_ok', 'Your user was deleted successfully');
        }

        if (Auth::user()->is_admin) {
            $user->delete();
            return redirect(route('user.index'))->with('toast_ok', 'User was deleted successfully');
        }

        abort(StatusCode::FORBIDDEN, 'You can not view another user\'s profile' );
        return redirect(route('welcome')) ; //Actually this should be unreachable... except if the user has javascript disabled. Possible with adBlocker (?)
    }
}