<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('Components/Login', [
            'status' => 'Login'
        ]);
    }
    public function login(Request $request)
    {
        $credential = $request->validate([
            'email' => 'reqiured|email:dns',
            'name' => 'required|min:3',
            'password' => 'required|min:6|'
        ]);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('LoginSuccess', 'Login success');
        };
        return back()->with('LoginError', 'Invalid email or password');
    }
}
