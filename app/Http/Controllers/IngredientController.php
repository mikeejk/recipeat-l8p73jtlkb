<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;
use Illuminate\Validation\Rules\In;
use Yajra\Datatables\Datatables;

class IngredientController extends Controller
{
    // Function - Index
    public function index()
    {
        $ingredient = Ingredient::all();
        return redirect('/ingredient', compact('ingredient'));
    }

    // Function - Create
    public function create()
    {
        return view('screens.admin.recipe.add_ingredient');
    }

    // Function - Store
    public function store(Request $request)
    {
        // Create New Object
        $ingredient = new Ingredient();

        // Validate the Date
        $ingredient = Ingredient::create($this->ValidatedData());

        // User Entered - Data Saving
        $ingredient->ingredient = request()->get('ingredient');

        // Data Save
        $ingredient->save();

        // If the user click the (SAVE) button run the if condition
        // If the user click the (SAVE AND INSERT NEXT) button run the else condition
        if ($request->get('action') == 'ingredient_save') {
            return redirect()->back();
        } elseif ($request->get('action') == 'ingredient_save_next') {
            return redirect()->back();
        }
    }

    // Function - Edit
    public function edit(Ingredient $ingredient)
    {
        return view('screens.admin.recipe.edit_ingredient', compact('ingredient'));
    }

    // Function - Update
    public function update(Ingredient $ingredient)
    {
        $data = request()->validate(
            [
                'ingredient' => 'required',
            ]
        );

        $ingredient->update($data);

        return redirect('/ingredients_create');
    }

    // Function - Destroy
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();

        return redirect('/ingredients_create');
    }

    // Function - getIndex
    public function getIndex()
    {
        return view('screens.admin.recipe.add_ingredient');
    }

    // Function - anyData
    public function anyData()
    {
        $ingredients = Ingredient::all();
        return datatables()->of($ingredients)
            ->addColumn('action', function ($ingredient) {
                $html = '<a href="/ingredients/'.$ingredient->id.'/edit" class="btn btn-sm btn-primary justify-content-end">Edit</a> ';
                $html .= '<a href="/ingredients/'.$ingredient->id.'/delete" class="btn btn-sm btn-danger justify-content-end">Delete</a>';
                return $html;
            })->toJson();

        return Datatables::of(Ingredient::query())->make(true);
    }

    // Function - validatedData
    protected function validatedData()
    {
        return request()->validate(
            [
                'ingredient' => "required|string|unique:ingredients,ingredient"            ]
        );
    }
}
