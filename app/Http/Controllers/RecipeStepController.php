<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Recipe_Step;

class RecipeStepController extends Controller
{
    public function destroy(Recipe_Step $recipe_step)
    {
        $recipe_step->delete();
        $recipe = Recipe::find($recipe_step->recipe_id);
        $recipe = [];
        $recipe = Recipe_Step::select('*')->where('recipe_id', $recipe_step->recipe_id)->get();

        return redirect('/recipes');
    }
}
