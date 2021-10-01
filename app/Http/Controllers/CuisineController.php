<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuisine;
use Yajra\Datatables\Datatables;

class CuisineController extends Controller
{
    // Function - Index
    public function index()
    {
        $cuisines = Cuisine::all();
        return redirect('/cuisines', compact('cuisine'));
    }

    // Function - Create
    public function create()
    {
        return view('screens.admin.recipe.add_cuisine');
    }

    // Function - Store
    public function store(Request $request)
    {
        // Data - Save
        $data = request()->validate([
            'cuisine' => 'required',
        ]);

        // Send the use inputed data to create function
        Cuisine::create($data);

        // If the user click the (SAVE) button run the if condition
        // If the user click the (SAVE AND INSERT NEXT) button run the else condition
        if ($request->get('action') == 'cuisine_save') {
            return redirect()->back();
        } elseif ($request->get('action') == 'cuisine_save_next') {
            return redirect()->back();
        }
    }

    // Function - getIndex
    public function getIndex()
    {
        return view('screens.admin.recipe.add_cuisine');
    }

    // Function - anyData
    public function anyData()
    {
        $cuisines = Cuisine::all();
        return datatables()->of($cuisines)
            ->addColumn('action', function ($cuisine) {
                $html = '<a href="/categorys/'.$cuisine->id.'/edit" class="btn btn-sm btn-primary justify-content-end">Edit</a> ';
                $html .= '<a href="/categorys/'.$cuisine->id.'/delete" class="btn btn-sm btn-danger justify-content-end">Delete</a>';
                return $html;
            })->toJson();

        return Datatables::of(Cuisine::query())->make(true);
    }
}
