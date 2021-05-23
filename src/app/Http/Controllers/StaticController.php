<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\{Factory as ViewFactory, View};

class StaticController extends Controller
{
    public function welcome(): ViewFactory|View|Application
    {
        return view('welcome');
    }

    public function home(): ViewFactory|View|Application
    {
        return view('home');
    }
}