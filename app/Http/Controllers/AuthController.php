<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.tes');
    }

    public function login(Request $request)
    {
        

    }

    public function showRegisterForm()
    {
        return view('auth.tes1');
    }

    public function register(Request $request)
    {
        
        

    }
}