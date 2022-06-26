<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        return view('Components/Material', [
            'status' => 'Material'
        ]);
    }
    public function show()
    {
    }
}
