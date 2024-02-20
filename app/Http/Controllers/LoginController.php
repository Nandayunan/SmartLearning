<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        $isOk = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if (! $isOk) {
            return to_route('login.index')->withErrors('invalid credentials');
        }

        return to_route('dashboard.index');
    }
}
