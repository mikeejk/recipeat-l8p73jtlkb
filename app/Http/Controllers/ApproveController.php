<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Yajra\Datatables\Datatables;

class ApproveController extends Controller
{
    //Function - Index
    public function index()
    {
        $recipes = Recipe::all();
        return view('screens.admin.recipe.approve', compact('recipe'));
    }

    // Function - getIndex
    public function getIndex()
    {
        return view('screens.admin.recipe.approve');
    }

    //Function - anyData
    public function anyData()
    {
        $recipes = Recipe::all();
        return datatables()->of($recipes)
            ->addColumn('action', function () {
                $html = '<a href="#" class="btn btn-sm btn-success justify-content-end">Approve</a> ';
                $html .= '<a href="#" class="btn btn-sm btn-danger justify-content-end">Denied</a>';
                return $html;
        })
        ->toJson();

        return Datatables::of(Recipe::query())->make(true);
    }
}
