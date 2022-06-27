<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Material;
use Illuminate\Routing\Controller;
use Exception;

class MaterialController extends Controller
{
    public function index()
    {
        return view('Components/Material', [
            'status' => 'Material'
        ]);
    }
    public function show(Request $request)
    {
        $category = Category::all();
        $material = Material::find($request->id);
        $temp = null;
        try {
            $getCategoryName = Category::find($request->category_id);
            $getCategoryName = $getCategoryName->catergory_name;
            $rows = [];
            $temp = null;
            foreach (explode(' ', $getCategoryName) as $row) {
                $rows[] = $row;
            }
            foreach ($rows as $row) {
                if ($row == last($rows)) {
                    $temp .= $row . 's';
                } else {
                    $temp .= $row . '_';
                }
            }
        } catch (Exception $e) {
            $temp = null;
        }
        $temp = strtolower($temp);
        $selected_id = [];
        $selected_id['category_id'] = $request->category_id;
        $selected_id['name'] = $temp;
        $selected_id['status'] = $request;
        return view(
            '/dashboard/Components/material',
            [
                'status' => 'Material',
                'material' => $material,
                'category' => $category,
                'selected_id' => $selected_id
            ]
        );
    }
}
