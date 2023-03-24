<?php

namespace App\Http\Controllers\Administrations;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\In;
use Inertia\Inertia;
use Inertia\Response;

class AdministrationController extends Controller
{
    public function index(): Response
    {
        Inertia::setRootView('administrations/index');
        return Inertia::render('Dashboard');
    }
}
