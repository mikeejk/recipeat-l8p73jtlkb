<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Recipe_Ingredient;

class RecipeIngredientController extends Controller
{
    public function destroy(Recipe_Ingredient $recipe_ingredients)
    {
        $recipe_ingredients->delete();
        $recipe = Recipe::find($recipe_ingredients->recipe_id);
        $recipe = [];
        $recipe = Recipe_Ingredient::select('*')->where('recipe_id', $recipe_ingredients->recipe_id)->get();

        return redirect('/recipes');
    }
}
