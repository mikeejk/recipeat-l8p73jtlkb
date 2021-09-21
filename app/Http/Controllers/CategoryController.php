<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\Datatables\Datatables;

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

        // Send the use inputed data to create function
        Category::create($data);

        // If the user click the (SAVE) button run the if condition
        // If the user click the (SAVE AND INSERT NEXT) button run the else condition
        if ($request->get('action') == 'category_save') {
            return redirect('/admin_recipe');
        } elseif ($request->get('action') == 'category_save_next') {
            return redirect()->back();
        }
    }

    // Function - getIndex
    public function getIndex()
    {
        return view('screens.admin.recipe.add_category');
    }

    // Function - anyData
    public function anyData()
    {
        $categorys = Category::all();
        return datatables()->of($categorys)
            ->addColumn('action', function ($category) {
                $html = '<button href="/recipes/'.$category->id.'/edit" class="btn btn-sm btn-outline-primary justify-content-end" disabled>Edit this Category</button> ';
                $html .= '<button href="/recipes/'.$category->id.'/delete" class="btn btn-sm btn-outline-danger justify-content-end" disabled>Delete this Category</button>';
                return $html;
            })->toJson();

        return Datatables::of(Category::query())->make(true);
    }
}
