<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuisine;

class CuisineController extends Controller
{
    // Function - Create
    public function create()
    {
        return view('screens.admin.recipe.add_cuisine');
    }

    // Function - Save
    public function save(Request $request)
    {
        // Data - Save
        $data = request()->validate([
            'cuisine' => 'required',
        ]);

        Cuisine::create($data);

        return redirect('admin_recipe');
    }

    // Function - Store
    public function store(Request $request)
    {
        // Data - Save
        $data = request()->validate([
            'cuisine' => 'required',
        ]);

        Cuisine::create($data);

        return redirect()->back();
    }
}
