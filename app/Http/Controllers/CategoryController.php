<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Function - Create
    public function create()
    {
        return view('screens.admin.recipe.add_category');
    }

    // Function - Store
    public function store(Request $request)
    {
        // Data - Save
        $data = request()->validate([
            'category' => 'required',
        ]);

        Category::create($data);

        return redirect()->back();
    }
}
