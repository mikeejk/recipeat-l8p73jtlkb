<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Measurement;
use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\User;
use App\Models\Like;
use App\Models\Pinboard;
use App\Models\Pin_recipe;
use App\Models\Recipe_Step;
use App\Models\Recipe_Ingredient;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewRecipePost;

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
    //Function - Create_recipe
    public function create_recipe1(Request $request)
    {
        $recipe = $request->session()->get('recipe');
        $categories = Category::all(['id', 'category']);
        $cuisines = Cuisine::all(['id', 'cuisine']);
        // dd($recipe);
        return view('screens.user.recipe.create_recipe1',compact('recipe'));
    }
    public function store_recipe1(Request $request)
    {
        $validatedData = $request->validate([
        'recipe_name' => 'required',
        'preparing_time' => 'required',
        'cooking_time' => 'required',
        'cuisine' => 'required',
        'category' => 'required',
        'cuisine' => 'required',
        'description' => 'required',
    ]);
    if (empty($request->session()->get('recipe'))) {
        $recipe = new Recipe();
        $recipe->fill($validatedData);
        $request->session()->put('user', $recipe);
    } else {
        $recipe = $request->session()->get('recipe');
        $recipe->fill($validatedData);
        $request->session()->put('user', $recipe);
    }
    $categories = Category::all(['id', 'category']);
    $cuisines = Cuisine::all(['id', 'cuisine']);
        return redirect("/create_recipe2");
    }
    public function create_recipe2(Request $request)
    {
        $recipe = $request->session()->get('request');
        $ingredients = Ingredient::all();
        $measurements = Measurement::all();
        return view('screens.user.recipe.create_recipe2', compact('recipe','ingredients','measurements'));
    }
    public function store_recipe2(Request $request)
    {
        $validatedData = $request->validate([
            '' => 'nullable',
            '' => 'nullable',
        ]);
        $user = $request->session()->get('user');
        $user->fill($validatedData);
        $request->session()->put('user', $user);
        return redirect("/create_recipe3");
    }
    public function create_recipe3()
    {
        $categories = Category::all(['id', 'category']);
        $cuisines = Cuisine::all(['id', 'cuisine']);
        $measurements = Measurement::all(['id', 'measurement']);
        $ingredients = Ingredient::all(['id', 'ingredient']);
        return view('screens.user.recipe.create_recipe3', compact('categories', 'cuisines', 'measurements', 'ingredients'));
    }
    public function store_recipe3()
    {
        return redirect("/create_recipe4");
    }
    public function create_recipe4()
    {
        $categories = Category::all(['id', 'category']);
        $cuisines = Cuisine::all(['id', 'cuisine']);
        $measurements = Measurement::all(['id', 'measurement']);
        $ingredients = Ingredient::all(['id', 'ingredient']);
        return view('screens.user.recipe.create_recipe4', compact('categories', 'cuisines', 'measurements', 'ingredients'));
    }
    // Function - Store
    public function store(Request $request)
    {
        $this->ValidatedData();

        // Create New Object
        $recipe = new Recipe();

        // User_id Form User Model
        $user_id = auth()->user()->id;
        $users = User::all();
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

        if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
            $recipe->addMediaFromRequest('cover')->toMediaCollection('cover');
        }
        // Staus ( Home-Chef & User = 0 || Chef = 1 )
        $role = auth()->user()->hasRole('Chef');
        $role1 = auth()->user()->hasRole('Home-Chef');

        // If the role Chef post the recipe Approve
        if ($role) {
            $recipe->status = 'Approved';
            // Elseif the role Home-Chef post the recipe Pending
        } elseif ($role1) {
            $recipe->status = 'Pending';
            // Else the role Home-Chef post the recipe User
        } else {
            $recipe->status = 'User';
        }
        $chef = auth()->user()->hasRole('Chef');
        $home_chef = auth()->user()->hasRole('Home-Chef');

        if ($chef) {
            $recipe->creator = '1';
            // Elseif the role Home-Chef post the recipe Pending
        } elseif ($home_chef) {
            $recipe->creator = '2';
            // Else the role Home-Chef post the recipe User
        } else {
            $recipe->creator = '3';
        }
        // Save Data
        $recipe->save();

        foreach ($users as $user) {
            $user->notify(new  NewRecipePost(auth()->user()->name, $recipe->recipe_name));
        }
        // Declare steps
        $steps = $request->steps;
        // for lopping steps
        for ($i = 0; $i < count($steps); $i++) {
            $datastep = [

                // Foreign Keys - Data Saving
                'recipe_id' => $recipe->id,

                // User Data - Enterd
                'steps' => $steps[$i],
            ];
            // writing to DB
            DB::table('recipe__steps')->insert($datastep);
        }

        $ingredient = $request->ingredient_id;
        $quantity = $request->quantity;
        $measurement = $request->measurement;

        for ($i = 0; $i < count($ingredient); $i++) {
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
        $measurements = Measurement::all(['id', 'measurement']);
        $ingredients = Ingredient::all(['id', 'ingredient']);
        $recipe_steps = Recipe_Step::where('recipe_id', '=', $recipe->id)->get();
        $recipe_ingredients = Recipe_Ingredient::where('recipe_id', '=', $recipe->id)->get();
        //    dd($recipe_steps);
        return view('screens.user.recipe.edit_recipe', compact('recipe', 'measurements', 'ingredients', 'recipe_steps', 'recipe_ingredients'));
    }

    // Function - Update
    public function update(Recipe $recipe, Request $request)
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
                'bud_astringent' => 'required',

            ]
        );

        // if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
        //     $recipe->addMediaFromRequest('cover')->toMediaCollection('cover');
        // }
        if ($request->hasFile('cover')) {
            $recipe->clearMediaCollection('cover');
            $recipe->addMediaFromRequest('cover')->toMediaCollection('cover');
        }
        // Save Data
        $recipe->update($data);
        // Declare steps
        $steps = $request->steps;

        // for lopping steps
        for ($i = 0; $i < count($steps); $i++) {
            $datastep = [

                // Foreign Keys - Data Saving
                'recipe_id' => $recipe->id,

                // User Data - Enterd
                'steps' => $steps[$i],
            ];
            // writing to DB
            DB::table('recipe__steps')->updateOrInsert($datastep);
        }

        $ingredient = $request->ingredient_id;
        $quantity = $request->quantity;
        $measurement = $request->measurement;
        // dd( $ingredient);

        for ($i = 0; $i < count($ingredient); $i++) {
            $dataingredient = [
                'recipe_id' => $recipe->id,
                'ingredient_id' => $ingredient[$i],
                'quantity' => $quantity[$i],
                'measurement_id' => $measurement[$i]
            ];
            DB::table('recipe__ingredients')->updateOrInsert($dataingredient);
        }

        $recipe->update($data);

        return redirect('/recipes');
    }

    // Function - Destroy
    public function destroy(Recipe $recipe, Request $request)
    {
        DB::table('recipe__steps')->where('recipe_id', '=', $recipe->id)->delete();
        DB::table('recipe__ingredients')->where('recipe_id', '=', $recipe->id)->delete();
        $recipe->delete();
        return redirect('/recipes');
        // $steps = $request->steps;

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
                $html = '<a href="/recipes/' . $recipe->id . '/edit" class="btn btn-sm btn-outline-primary justify-content-end">Edit</a> ';
                $html .= '<a href="/recipes/' . $recipe->id . '/delete" class="btn btn-sm btn-outline-danger justify-content-end">Delete</button>';
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
    public function denide(Recipe $recipe)
    {
        $recipes = DB::table('recipes')
            ->where('id', $recipe->id)
            ->where('status', '=', 'Pending')
            ->update(['status' => 'Denide']);

        return redirect()->back();
    }

    public function approve(Recipe $recipe, Request $request)
    {
        $recipes = DB::table('recipes')
            ->where('id', $recipe->id)
            ->where('status', '=', 'Pending')
            ->update(['status' => 'Approved']);

        return redirect()->back();
    }

    //Function - anyData1 for approve
    public function anyData1()
    {
        $recipes = Recipe::where('status', 'Pending');
        return datatables()->of($recipes)

            ->addColumn('action', function ($recipe) {
                $html = '<a href="/approve/' . $recipe->id . '/approve" class="btn btn-sm btn-outline-primary justify-content-end">Approve</a> ';
                $html .= '<a href="/approve/' . $recipe->id . '/denide" class="btn btn-sm btn-outline-danger justify-content-end">Denide</button>';
                return $html;
            })
            ->addColumn('name', function ($user) {
                // return to view (What: get the user_id form recipe table and check with user table then display the corresponding name of the user_id)
                return User::find($user->user_id)->name;
            })->toJson();
        return Datatables::of(Recipe::query())->make(true);
    }

    //Function - Index1 for all recipes
    public function index2()
    {
        $recipes = Recipe::all();
        return view('screens.admin.recipe.all_recipe', compact('recipes'));
    }

    // Function - getIndex1 for all recipes
    public function getIndex2(Recipe $recipe)
    {
        return view('screens.admin.recipe.all_recipe');
    }

    //Function - anyData1 for all recipes
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
    //  Recipe Search
    public function search(Request $request)
    {
        $term  = $request->get('term');
        $creator = $request->get('creator');
        $category_id = $request->get('category');
        if ($term) {
            $recipe = Recipe::where('recipe_name', 'LIKE', '%' . $term . '%')
                ->where('user_id', '!=', auth()->id())
                ->where('status', 'Approved')
                ->orderBy("recipe_name", "asc")->Paginate(4);
            $recipe->appends(array(
                'term' => $request->get('term'),
            ));
            return view('welcome', compact('recipe'));
        }
         return view('welcome');
    }
    //common search
    public function searchResult(Request $request)
    {
        // easyToCook();
        // function easyToCook()
        // {
        //     $preparing_time = Recipe::pluck('preparing_time')->min();
        // $cooking_time = Recipe::pluck('cooking_time')->min();
        // $recipe = Recipe::where('preparing_time', $preparing_time)->where('cooking_time', $cooking_time)->get();
        // return view('searchResults', compact('recipe'));
        // }
        $term  = $request->get('term');
        $t = $term;
        $creator = $request->get('creator');
        $category_id = $request->get('category');
        if ($term) {
            $recipe = Recipe::where('recipe_name', 'LIKE', '%' . $term . '%')
                ->where('creator', 'LIKE', '%' . $creator . '%')
                ->where('category_id', 'LIKE', '%' . $category_id . '%')
                // ->where('user_id', '!=', auth()->id())
                ->where('status', 'Approved')
                // ->where('status','!=','Denide')
                // ->where('creator','!=','User')
                ->orderBy("recipe_name", "asc")->paginate(4);
            $recipe->appends(array(
                'term' => $request->get('term'),
            ));


        }
        $pinrecipes = Pin_recipe::all();
        $collections = Pinboard::all('id', 'pin_name');
        foreach($pinrecipes as $pin){
        $count=Pin_recipe::where('user_id',auth()->user()->id)->where('pinboard_id',$pin->pinboard_id)->get()->count();
        }

        $posts = Recipe::whereUserId(auth()->user()->id)->get(['id']);
        $total_like_count = '0';
        foreach ($posts as $post) {
            $post = Like::wherelikeable_id($post->id)->count();
            $total_like_count = $post + $total_like_count;
        }
        $role = 2;
        $id = auth()->user()->id;
        $suggestions = User::whereHas('roles', function ($query) use ($role) {
            $query->where('id', $role);
        })->where('id', '!=', $id)->where('name', '!=', '0')->whereNotIn('id', function ($query) use ($id) {
            $query->select('leader_id')
                ->from('followers')
                ->where('follower_id', $id)
                ->where('leader_id',$id);
        })->get()->take(3);

        foreach ($suggestions as $suggestion) {
                $profile_image = DB::table('chef_questions')->select('*')->join('users', 'users.id', '=', 'chef_questions.user_id')->where('chef_questions.user_id', $suggestion->id)->get('image');
        }
        //    dd($role);
     return view('/searchResults', compact('recipe', 't', 'collections','suggestions','profile_image','pinrecipes','count','total_like_count'));
    }

    //  Recipe Search for non login users
    public function nonLoginUserSearch(Request $request)
    {
        $term  = $request->get('term');
        $creator = $request->get('creator');
        $category_id = $request->get('category');
        if ($term) {
            $recipe = Recipe::where('recipe_name', 'LIKE', '%' . $term . '%')
                ->where('creator', 'LIKE', '%' . $creator . '%')
                ->where('category_id', 'LIKE', '%' . $category_id . '%')
                ->where('user_id', '!=', auth()->id())
                ->where('status', 'Approved')
                // ->where('status','!=','Denide')
                // ->where('creator','!=','User')
                ->orderBy("recipe_name", "asc")->Paginate(4);
            $recipe->appends(array(
                'term' => $request->get('term'),
            ));
            return view('welcome_withoutLogin', compact('recipe'));
        }
        return view('welcome_withoutLogin');
    }


    public function search1(Request $request)
    {
        // $recipes=Recipe::all();
        $ingredient = Ingredient::all();
        $ingredient_id = $request->get('ingredient_id');
        $recipe_ingredients = Recipe_Ingredient::all();
        $ingredient = $request->get('ingredient');
        if ($ingredient) {
            $recipe = Recipe_ingredient::where('ingredient_id', 'LIKE', '%' . $ingredient . '%')
                ->get();

            return view('search_ingredient', compact('ingredient', 'recipe_ingredients', 'recipe'));
        }

        return view('search_ingredient', compact('ingredient', 'recipe_ingredients'));
    }
    // public function mainDashboardSearch(Request $request)
    // {
    //     $term  = $request->get('term');
    //     //  $creator = $request->get('creator');
    //     //  $category_id = $request->get('category');
    //      if ($term) {
    //         $recipe=Recipe::join('users','users.id','=','recipes.user_id')
    //         ->join('media','media.model_id','=','recipes.id')

    //         ->where('recipe_name', 'LIKE', '%' . $term . '%')
    //           ->orWhere('users.name','LIKE','%'.$term . '%')
    //             //  ->where('creator', 'LIKE', '%' . $creator . '%')
    //             // ->where('category_id', 'LIKE', '%' . $category_id . '%')
    //             // ->where('user_id', '!=', auth()->id())
    //             ->where('status', 'Approved')
    //             // ->where('status','!=','Denide')
    //             // ->where('creator','!=','User')
    //             //  ->get();
    //         ->orderBy("recipe_name", "asc")->Paginate(4);
    //          $recipe->appends(array(
    //             'term' => $request->get('term'),
    //          ));
    //         return view('mainDashboard', compact('recipe'));
    //      }
    //     return view('mainDashboard');
    // }

    // Recipe result view
    public function view_recipe(Recipe $recipe)
    {
        $pinboards = Pinboard::all('id', 'pin_name');
        $pinrecipes = Pin_recipe::all('pinboard_id');
        $recipe_steps = Recipe_Step::where('recipe_id', '=', $recipe->id)->pluck('steps');
        $recipe_ingredients = Recipe_Ingredient::where('recipe_id', '=', $recipe->id)->get();
        return view('recipe_view', compact('recipe', 'pinboards', 'recipe_ingredients', 'recipe_steps', 'pinrecipes'));
    }


    //New Recipe View
    public function viewRecipe($recipe)
    {
        $pinboards = Pinboard::all('id', 'pin_name');
        $pinrecipes = Pin_recipe::all('pinboard_id');
        $recipe= Recipe::find($recipe);
        $recipe_steps = Recipe_Step::where('recipe_id', '=', $recipe->id)->pluck('steps');
        $recipe_ingredients = Recipe_Ingredient::where('recipe_id', '=', $recipe->id)->get();
        $chefProfileImage=DB::table('chef_questions')->join('recipes', 'recipes.user_id', '=', 'chef_questions.user_id')->where('recipes.user_id', $recipe->user_id)->first();
        $user=User::where('id',$chefProfileImage->user_id)->first();
        $userFollow = DB::table('chef_questions')->join('recipes', 'recipes.user_id', '=', 'chef_questions.user_id')->where('recipes.user_id', $chefProfileImage->user_id)->latest();
        $homeChefProfileImage =DB::table('questions')->join('recipes', 'recipes.user_id', '=', 'questions.user_id')->where('recipes.user_id', $recipe->user_id)->first();
        return view('screens.user.recipe.recipeView', compact('recipe','userFollow','pinboards', 'recipe_ingredients', 'recipe_steps', 'pinrecipes','chefProfileImage','user','homeChefProfileImage'));
    }

    public function  nonLoginUser_view_recipe(Recipe $recipe)
    {
        $pinboards = Pinboard::all('id', 'pin_name');
        $recipe_steps = Recipe_Step::where('recipe_id', '=', $recipe->id)->pluck('steps');
        $recipe_ingredients = Recipe_Ingredient::where('recipe_id', '=', $recipe->id)->get();
        return view('recipe_view_withoutLogin', compact('recipe', 'pinboards', 'recipe_steps', 'recipe_ingredients'));
    }
    public function recipeview(Recipe $recipe)
    {
        $pinboards = Pinboard::all('id', 'pin_name');
        $recipe_steps = Recipe_Step::where('recipe_id', '=', $recipe->id)->pluck('steps');
        $ingredient = Ingredient::all();
        $recipe_ingredients = Recipe_Ingredient::where('recipe_id', '=', $recipe->id)->get();
        //   dd($ingredient);
        return view('recipeview', compact('recipe', 'pinboards', 'recipe_ingredients', 'ingredient', 'recipe_steps'));
    }
    public function show_count(Request $request)
    {
        $recipe_count = Recipe::where('status', 'Approved')->count();
        $recipe = Recipe::all();
        return view('mainDashboard', compact('recipe_count', 'recipe'));
    }
    // public function easyToCook()
    // {
    //     $preparing_time = Recipe::pluck('preparing_time')->min();
    //     $cooking_time = Recipe::pluck('cooking_time')->min();
    //     $recipe = Recipe::where('preparing_time', $preparing_time)->where('cooking_time', $cooking_time)->get();
    //     // dd($recipe);
    //      return view('searchResults', compact('recipe'));
    // }
}
