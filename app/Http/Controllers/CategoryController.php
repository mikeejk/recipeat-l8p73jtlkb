<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\Datatables\Datatables;

class CategoryController extends Controller
{
    // Function - Index
    public function index()
    {
        $categorys = Category::all();
        return redirect('/categorys', compact('category'));
    }

    // Function - Create
    public function create()
    {
        return view('screens.admin.recipe.add_category');
    }

    // Function - Store
    public function store(Request $request)
    {
        // Create New Object
        $category = new Category();

        $category = Category::create($this->ValidatedData());

        // User Entered - Data Saving
        $category->category = $request->get('category');

        // Data
        $category->save();

        // If the user click the (SAVE) button run the if condition
        // If the user click the (SAVE AND INSERT NEXT) button run the else condition
        if ($request->get('action') == 'category_save') {
            return redirect()->back();
        } elseif ($request->get('action') == 'category_save_next') {
            return redirect()->back();
        }
    }

    // Function - Edit
    public function edit(Category $category)
    {
        return view('screens.admin.recipe.edit_category', compact('category'));
    }

    //Function - Update
    public function update(Category $category)
    {
        $data = request()->validate(
            [
                'category' => 'required',
            ]
        );

        $category->update($data);

        return redirect('/categorys_create');
    }

    // Function - Destroy
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/categorys_create');
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
                $html = '<a href="/categorys/'.$category->id.'/edit" class="btn btn-sm btn-primary justify-content-end">Edit</a> ';
                $html .= '<a href="/categorys/'.$category->id.'/delete" class="btn btn-sm btn-danger justify-content-end">Delete</a>';
                return $html;
            })->toJson();

        return Datatables::of(Category::query())->make(true);
    }

    // Function - ValidatedData
    protected function validatedData()
    {
        return request()->validate(
            [
                'category' => 'required', 'string', 'unique:categories',
            ]
        );
    }
}
