<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Components/Register', [
            'status' => 'Register'
        ]);
    }
    public function regis(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);
        // @dd($request->all());
        $validate['password'] = Hash::make($validate['password']);
        $user = new User($validate);
        $user->save();
        return redirect()->route('login')->with('RegisterSuccess', 'Register success');
    }
}
