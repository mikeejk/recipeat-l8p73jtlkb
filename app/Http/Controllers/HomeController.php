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
use App\Models\Question;

class HomeController extends Controller
{
    public function index()
    {
        $recipe = Recipe::where('status', 'Approved')->get();
        $user = User::where('id',auth()->user()->id)->first();
        $chef_questions= Chef_question::where('user_id',auth()->user()->id)->first();
        $question = Question::where('user_id',auth()->user()->id)->first();
        $collections = Pinboard::all();
        $recipes = Recipe::where('user_id', auth()->user()->id)->get()->count();
        return view('home', compact('recipe','user','question','chef_questions', 'collections', 'recipes'));
    }
}