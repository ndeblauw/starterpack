<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('welcome');
    }
}
