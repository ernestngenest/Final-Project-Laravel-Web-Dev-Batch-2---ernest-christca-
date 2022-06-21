<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

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
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('LoginSuccess', 'Login success');
        };
        return redirect()->back()->with('LoginError', 'Invalid email or password');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        Request()->session()->regenerateToken();
        return redirect()->intended('/')->with('LogoutSuccess', 'Logout success');
    }
}
