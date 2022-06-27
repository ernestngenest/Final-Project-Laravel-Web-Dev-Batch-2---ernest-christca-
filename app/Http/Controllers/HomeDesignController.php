<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use App\Models\HomeDesign;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeDesignController extends Controller
{
    public function show(Request $request)
    {
        $category = Category::all();
        $material = HomeDesign::find($request->id);
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
        // @dd($material);
        $temp = strtolower($temp);
        $selected_id = [];
        $selected_id['category_id'] = $request->category_id;
        $selected_id['name'] = $temp;
        $selected_id['status'] = $request;
        return view(
            '/dashboard/Components/material',
            [
                'status' => 'Material',
                'home' => $material,
                'category' => $category,
                'selected_id' => $selected_id
            ]
        );
    }
}
