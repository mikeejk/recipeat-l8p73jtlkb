<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Recipe;

class RecipeController extends Controller
{
    // Function - Index
    public function index()
    {
        $recipes = Recipe::all();
        return view('screens.user.recipe.recipe', compact('recipes'));
    }

    // Function - Create
    public function create()
    {
        $categories = Category::all(['id', 'category']);
        $cuisines = Cuisine::all(['id', 'cuisine']);
        return view('screens.user.recipe.add_recipe', compact('categories', 'cuisines'));
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
        $recipe->cuisine_id = request()->get('cuisine');
        $recipe->category_id = request()->get('category');

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
}
