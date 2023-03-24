<?php

namespace App\Http\Controllers\Auth\Administrations;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class AuthController extends Controller
{
    public function login(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('administrations.login');
    }

    public function attempt(Request $request)
    {
        if(Auth::guard('administrators')->attempt($request->only(['username', 'password'])))
            return redirect()->route('admin.dashboard');
        else
            return redirect()
                ->back()
                ->withInput($request->only(['username']))
                ->withErrors([Lang::get('auth.failed')]);
    }
}
