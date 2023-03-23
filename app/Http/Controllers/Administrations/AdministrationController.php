<?php

namespace App\Http\Controllers\Administrations;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function login(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('administrations.login');
    }
}
