<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        $material = DB::table('categories')
            ->join('materials', 'categories.id', '=', 'materials.category_id')
            ->select('materials.material_name', 'materials.material_price', 'materials.material_price', 'materials.material_image', 'materials.material_description',)
            ->get();

        $worker = DB::table('categories')
            ->join('constructor_workers', 'categories.id', '=', 'constructor_workers.category_id')
            ->select(
                'constructor_workers.constructor_worker_name',
                'constructor_workers.constructor_worker_image',
                'constructor_workers.constructor_worker_price',
                'constructor_workers.constructor_worker_quantity'
            )
            ->get();
        if ($request->has('search')) {
            $search = $request->get('search');
            $material = DB::table('categories')
                ->join('materials', 'categories.id', '=', 'materials.category_id')
                ->select('materials.material_name', 'materials.material_price', 'materials.material_price', 'materials.material_image', 'materials.material_description',)
                ->where('materials.material_name', 'like', '%' . $search . '%')
                ->get();
        }
        return view('/dashboard/Components/dashboard', [
            'status' => 'Dashboard',
            'materials' => $material,
            'workers' => $worker,
            'category' => \App\Models\Category::all(),
        ])->with('success', 'Data berhasil ditambahkan');
    }

    public function __construct()
    {
    }
    public function render()
    {
    }
}
