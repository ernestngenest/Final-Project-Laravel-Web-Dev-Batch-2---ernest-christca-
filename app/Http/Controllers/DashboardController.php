<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Components/dashboard', [
            'status' => 'Home',
        ]);
    }
    public function __construct()
    {
    }
    public function render()
    {
    }
}
