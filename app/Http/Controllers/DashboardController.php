<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $material = DB::table('categories')
        ->join('materials', 'categories.id', '=', 'materials.category_id')
        ->select( 'materials.material_name', 'materials.material_price' , 'materials.material_price', 'materials.material_image','materials.material_description',)
        ->get();

        $worker = DB::table('categories')
        ->join('constructor_workers', 'categories.id', '=', 'constructor_workers.category_id')
        ->select('constructor_workers.constructor_worker_name', 'constructor_workers.constructor_worker_image' ,
        'constructor_workers.constructor_worker_price' , 'constructor_workers.constructor_worker_quantity')
        ->get();

        return view('/dashboard/Components/dashboard', [
            'status' => 'Dashboard',
            'materials' => $material,
            'workers' => $worker
        ])->with('success', 'Data berhasil ditambahkan');
    }

    public function __construct()
    {
    }
    public function render()
    {
    }
}
