<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'username' => 'required|min:3',
            'email' => 'required|email:dns|min:6',
            'password' => 'required|max:255|min:3|confirmed'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
    }
}
