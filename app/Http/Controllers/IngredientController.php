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

        // Send the use inputed data to create function
        Ingredient::create($data);

        // If the user click the (SAVE) button run the if condition
        // If the user click the (SAVE AND INSERT NEXT) button run the else condition
        if ($request->get('action') == 'ingredient_save') {
            return redirect('/admin_recipe');
        } elseif ($request->get('action') == 'ingredient_save_next') {
            return redirect()->back();
        }
    }
}
