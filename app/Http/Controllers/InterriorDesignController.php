<?php

namespace App\Http\Controllers;

use Exception;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\InteriorDesign;
use Illuminate\Routing\Controller;

class InterriorDesignController extends Controller
{
    public function show(Request $request)
    {
        $category = Category::all();
        $material = InteriorDesign::find($request->id);
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
            '/dashboard/Components/interriordesign',
            [
                'status' => 'InteriorDesign',
                'interior' => $material,
                'category' => $category,
                'selected_id' => $selected_id
            ]
        );
    }
}
