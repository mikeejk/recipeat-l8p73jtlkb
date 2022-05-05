<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Measurement;
use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\User;
use App\Models\Pinboard;
use App\Models\Pin_recipe;
use App\Models\Recipe_Step;
use App\Models\Recipe_Ingredient;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewRecipePost;
use App\Models\Chef_question;


class ExlporeController extends Controller
{
    public function index()
    {
        $recipe = Recipe::where('status', 'Approved')->paginate(4);
        return view('explore', compact('recipe'));
    }
}
