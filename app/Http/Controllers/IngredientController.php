<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;
use Yajra\Datatables\Datatables;

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
            return redirect()->back();
        } elseif ($request->get('action') == 'ingredient_save_next') {
            return redirect()->back();
        }
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
                $html = '<a href="/categorys/'.$ingredient->id.'/edit" class="btn btn-sm btn-primary justify-content-end">Edit</a> ';
                $html .= '<a href="/categorys/'.$ingredient->id.'/delete" class="btn btn-sm btn-danger justify-content-end">Delete</a>';
                return $html;
            })->toJson();

        return Datatables::of(Ingredient::query())->make(true);
    }
}
