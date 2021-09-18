<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Measurement;
use App\Models\Ingredient;
use App\Models\Recipe;

class RecipeController extends Controller
{
    // Function - Index
    public function index()
    {
        $recipes = Recipe::all();
        return redirect('/recipes', compact('recipes'));
    }

    // Function - Create
    public function create()
    {
        $categories = Category::all(['id', 'category']);
        $cuisines = Cuisine::all(['id', 'cuisine']);
        $measurements = Measurement::all(['id', 'measurement']);
        $ingredients = Ingredient::all(['id', 'ingredient']);
        return view('screens.user.recipe.add_recipe', compact('categories', 'cuisines', 'measurements', 'ingredients'));
    }

    // Function - Store
    public function store(Request $request)
    {
        // Create New Object
        $recipe = new Recipe();

        // User_id Form User Model
        $user_id = auth()->user()->id;

        // Recipe-Data Storeing - Foreign Keys
        $recipe->user_id = $user_id;
        $recipe->category_id = request()->get('category');
        $recipe->cuisine_id = request()->get('cuisine');
        $recipe->measurement_id = request()->get('measurement');
        $recipe->ingredient_id = request()->get('ingredient');

        // Recipe-Data Storeing - User Entered
        $recipe->recipe_name = request()->get('recipe_name');
        $recipe->preparing_time = request()->get('preparing_time');
        $recipe->cooking_time = request()->get('cooking_time');
        $recipe->serves_people = request()->get('serves_people');
        $recipe->calories_in = request()->get('calories_in');
        $recipe->description = request()->get('description');
        $recipe->steps = request()->get('steps');
        $recipe->meta_description = request()->get('meta_description');
        $recipe->bud_sweet = request()->get('bud_sweet');
        $recipe->bud_sour = request()->get('bud_sour');
        $recipe->bud_salt = request()->get('bud_salt');
        $recipe->bud_spicy = request()->get('bud_spicy');
        $recipe->bud_bitter = request()->get('bud_bitter');
        $recipe->bud_astringent = request()->get('bud_astringent');

        // Save Data
        $recipe->save();

        return redirect('/recipes');
    }

    // Function - Edit
    public function edit(Recipe $recipe)
    {
        return view('screens.user.recipe.edit_recipe', compact('recipe'));
    }

    // Function - Update
    public function update(Recipe $recipe)
    {
        $data = request()->validate(
            [
                'recipe_name' => 'required',
                'preparing_time' => 'required',
                'cooking_time' => 'required',
                'serves_people' => 'required',
                'calories_in' => 'required',
                // 'description' => 'required',
                // 'steps' => 'required',
                // 'meta_description' => 'required',
                // 'bud_sweet' => 'required',
                // 'bud_sour' => 'required',
                // 'bud_salt' => 'required',
                // 'bud_spicy' => 'required',
                // 'bud_bitter' => 'required',
                // 'bud_astringent' => 'required'
            ]
        );

        $recipe->update($data);

        return redirect('/recipes');
    }

    // Function - Destroy
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect('/recipes');
    }

    // Function - getIndex
    public function getIndex()
    {
        return view('screens.user.recipe.recipe');
    }

    // Function - anyData
    public function anyData(Request $request)
    {
            $customers = Recipe::all();
            return datatables()->of($customers)
                ->addColumn('action', function ($recipe) {
                    $html = '<a href="/recipes/'.$recipe->id.'/edit" class="btn btn-sm btn-outline-primary justify-content-end">Edit My Recipe</a> ';
                    $html .= '<a href="/recipes/'.$recipe->id.'/delete" class="btn btn-sm btn-outline-danger justify-content-end">Delete this Recipe</button>';
                    return $html;
                })->toJson();

        return Datatables::of(Recipe::query())->make(true);
    }
}
