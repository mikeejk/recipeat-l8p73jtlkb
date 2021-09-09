<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    // Function - Create
    public function create()
    {
        return view('screens.admin.recipe.add_ingredient');
    }

    // Function - Save
    public function save(Request $request)
    {
        // Data - Save
        $data = request()->validate([
            'ingredient' => 'required',
        ]);

        Ingredient::create($data);

        return redirect('admin_recipe');
    }

    // Function - Store
    public function store(Request $request)
    {
        // Data - Save
        $data = request()->validate([
            'ingredient' => 'required',
        ]);

        Ingredient::create($data);

        return redirect()->back();
    }
}
