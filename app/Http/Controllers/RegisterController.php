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
        $validate = $request->validatte([
            'email' => 'required|email:dns|min:6',
            'username' => 'required|min:3',
            'password' => 'required|max:255|min:3|confirmed'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $validate->password = Hash::make($validate->password);
        $user = new User($validate);
        $user->save();
        return redirect()->route('home')->with('RegisterSuccess', 'Register success');
    }
}
