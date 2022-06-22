<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('/dashboard/Components/dashboard', [
            'status' => 'Dashboard',
            'auth_status' => 1
        ]);
    }
    public function __construct()
    {
    }
    public function render()
    {
    }
}
