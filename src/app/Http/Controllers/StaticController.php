<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\{Factory as ViewFactory, View};
use Illuminate\Http\RedirectResponse;

class StaticController extends Controller
{
    public function welcome(): ViewFactory|View|Application|RedirectResponse
    {
        return view('welcome');
    }

    public function home(): ViewFactory|View|Application
    {
        if(Auth::user()->is_admin) {
            return view('home', [
                'order_count' => Order::where('status', '<', '1')->count(),
                'register_count' => User::whereDate('created_at', '<=', now()->subDays(7)->startOfDay()->toDateTimeString())->get()
                //startOfDay() is needed, because now it starts counting from midnight, not the current time. Without this you need to write subDay(8), which is fine I guess, but less obvious
            ]);
        }

        return redirect(route('product.index'));
    }
}