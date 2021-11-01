<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Measurement;
use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\User;

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
        $this->ValidatedData();

        // Create New Object
        $recipe = new Recipe();

        // User_id Form User Model
        $user_id = auth()->user()->id;

        // Recipe-Data Storeing - Foreign Keys
        $recipe->user_id = $user_id;
        $recipe->category_id = $request->get('category');
        $recipe->cuisine_id = $request->get('cuisine');

        // Recipe-Data Storeing - User Entered
        $recipe->recipe_name = $request->get('recipe_name');
        $recipe->preparing_time = $request->get('preparing_time');
        $recipe->cooking_time = $request->get('cooking_time');
        $recipe->serves_people = $request->get('serves_people');
        $recipe->calories_in = $request->get('calories_in');
        $recipe->description = $request->get('description');
        $recipe->meta_description = $request->get('meta_description');
        $recipe->bud_sweet = $request->get('bud_sweet');
        $recipe->bud_sour = $request->get('bud_sour');
        $recipe->bud_salt = $request->get('bud_salt');
        $recipe->bud_spicy = $request->get('bud_spicy');
        $recipe->bud_bitter = $request->get('bud_bitter');
        $recipe->bud_astringent = $request->get('bud_astringent');

        if($request->hasFile('cover') && $request->file('cover')->isValid()) {
            $recipe->addMediaFromRequest('cover')->toMediaCollection('cover');
        }

        // Staus ( Home-Chef & User = 0 || Chef = 1 )
        $role = auth()->user()->hasRole('Chef');

        // If the role Chef post the recipe 1
        if($role){
            $recipe->status = 'Approved';
        // Else the role Home-Chef & User post the recipe 0
        }else{
            $recipe->status = 'Pending';
        }

        // Save Data
        $recipe->save();

        // Declare steps
        $steps = $request->steps;

        // for lopping steps
        for ($i=0; $i < count($steps); $i++)
        {
            $datastep = [

                // Foreign Keys - Data Saving
                'recipe_id' => $recipe->id,

                // User Data - Enterd
                'steps' => $steps[$i],
            ];
            // writing to DB
            DB::table('recipe__steps')->insert($datastep);
        }

        $ingredient = $request->ingredient;
        $quantity = $request->quantity;
        $measurement = $request->measurement;

        for ($i=0; $i < count($ingredient); $i++)
        {
            $dataingredient = [
                'recipe_id' => $recipe->id,
                'ingredient_id' => $ingredient[$i],
                'quantity' => $quantity[$i],
                'measurement_id' => $measurement[$i]
            ];
            DB::table('recipe__ingredients')->insert($dataingredient);
        }

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
                'description' => 'required',
                'meta_description' => 'required',
                'bud_sweet' => 'required',
                'bud_sour' => 'required',
                'bud_salt' => 'required',
                'bud_spicy' => 'required',
                'bud_bitter' => 'required',
                'bud_astringent' => 'required'
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
        $customers = Recipe::where('user_id', auth()->user()->id);
        return datatables()->of($customers)
            ->addColumn('action', function ($recipe) {
                $html = '<a href="/recipes/'.$recipe->id.'/edit" class="btn btn-sm btn-outline-primary justify-content-end">Edit My Recipe</a> ';
                $html .= '<a href="/recipes/'.$recipe->id.'/delete" class="btn btn-sm btn-outline-danger justify-content-end">Delete this Recipe</button>';
                return $html;
            })
            // Add Column 'category'
            ->addColumn('category', function ($category) {
            // return to view (What: get the category_id form recipe table and check with categorys table then display the correspond name of the category_id)
                return Category::find($category->category_id)->category;
            })
            // Add Column 'cuisine'
            ->addColumn('cuisine', function ($cuisine) {
                // return to view (What: get the cuisine_id form recipe table and check with role table then display the correspond name of the cuisine_id)
                return Cuisine::find($cuisine->cuisine_id)->cuisine;
            })
            // send the data to view via json
            ->toJson();

        return Datatables::of(Recipe::query())->make(true);
    }

    // Function - ValidateData
    protected function validatedData()
    {
        return request()->validate(
            [
                'recipe_name'  => 'required',
                'preparing_time'  => 'required',
                'cooking_time'  => 'required',
                'serves_people'  => 'required',
                'calories_in' => 'required',
                'description'  => 'required',
                'steps'  => 'required',
                'meta_description'  => 'required',
                'bud_sweet'  => 'required',
                'bud_sour'  => 'required',
                'bud_salt'  => 'required',
                'bud_spicy'  => 'required',
                'bud_bitter'  => 'required',
                'bud_astringent'  => 'required',
            ]
        );
    }

    //Function - Index1 for approve
    public function index1()
    {
        $recipes = Recipe::all();
        return view('screens.admin.recipe.approve', compact('recipes'));
    }

    // Function - getIndex1 for approve
    public function getIndex1(Recipe $recipe)
    {
        return view('screens.admin.recipe.approve');
    }

    //Function - anyData1 for approve
    public function anyData1()
    {
        $recipes = Recipe::where('status', 'Pending');
        return datatables()->of($recipes)
        ->addColumn('action', function () {
            $html = '<button type="button" onclick="myApproval()"class="btn btn-sm btn-outline-primary justify-content-end mr-2">Approve</button>';
            $html .= '<button type="button" onclick="onDenide()"class="btn btn-sm btn-outline-danger justify-content-end">Denide</button>';
        return $html;
        })
        ->addColumn('name', function ($user){
                // return to view (What: get the user_id form recipe table and check with user table then display the corresponding name of the user_id)
                return User::find($user->user_id)->name;
            })->toJson();
        return Datatables::of(Recipe::query())->make(true);
    }

    //Function - Index1 for approve
    public function index2()
    {
        $recipes = Recipe::all();
        return view('screens.admin.recipe.all_recipe', compact('recipes'));
    }

    // Function - getIndex1 for approve
    public function getIndex2(Recipe $recipe)
    {
       return view('screens.admin.recipe.all_recipe');
    }

    //Function - anyData1 for approve
    public function anyData2()
    {
        $recipes = Recipe::where('status', 'Approved');
        return datatables()->of($recipes)
        ->addColumn('name', function ($user) {
           // return to view (What: get the user_id form recipe table and check with user table then display the corresponding name of the user_id)
           return User::find($user->user_id)->name;
        })
        // Add Column 'category'
        ->addColumn('category', function ($category) {
        // return to view (What: get the category_id form recipe table and check with categorys table then display the correspond name of the category_id)
            return Category::find($category->category_id)->category;
        })
        // Add Column 'cuisine'
        ->addColumn('cuisine', function ($cuisine) {
            // return to view (What: get the cuisine_id form recipe table and check with role table then display the correspond name of the cuisine_id)
            return Cuisine::find($cuisine->cuisine_id)->cuisine;
        })->toJson();

        return Datatables::of(Recipe::query())->make(true);
    }

    // Recipe Search
    public function search(Request $request)
    {
        if(isset($_GET['query'])){
        $search_text=$_GET['query'];
        $recipe = DB::table('recipes')->where('recipe_name','LIKE','%'.$search_text.'%')->Paginate(8);
        $recipe->appends($request->all());
        return view('welcome',['recipe'=>$recipe]);
        }
        else{
            return view('/welcome');
        }
    }

    // Recipe result view
    public function view_recipe(Recipe $recipe)
    {
        return view('recipe_view',compact('recipe'));
    }
}

