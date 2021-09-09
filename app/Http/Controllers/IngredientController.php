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

    // Function - Store
    public function store(Request $request)
    {
        // Data - Save
        $data = request()->validate([
            'ingredient' => 'required',
        ]);

        Ingredient::create($data);

        if ($request->get('action') == 'ingredient_save') {
            return redirect('/admin_recipe');
        } elseif ($request->get('action') == 'ingredient_save_next') {
            return redirect()->back();
        }
    }
}
