<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CuisineController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\PinboardController;
use App\Http\Controllers\PinRecipeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Livewire\Questionnaire;
use App\Http\Livewire\ChefQuestion;
use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FollowController;
use App\Models\User;
use App\Models\Recipe;
use Illuminate\Support\Facades\Request;
use App\Notifications\NewFollower;


// -------------------------------------------------------------------------------------------------------------------
//                                                    Other Routes
// -------------------------------------------------------------------------------------------------------------------


// Welcome Tab
Route::get('/', [RecipeController::class, 'nonLoginUserSearch']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Welcome Tab
Route::get('/login1', function () {
    return view('auth.login2');
});

// -------------------------------------------------------------------------------------------------------------------
//                                                    Follower FOllowing Routes
// -------------------------------------------------------------------------------------------------------------------

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/follower', [FollowController::class, 'index1']);

    Route::middleware(['auth:sanctum', 'verified'])->get('/follower.data', [FollowController::class, 'anyData1']);

    Route::middleware(['auth:sanctum', 'verified'])->get('/follower', [FollowController::class, 'getIndex1']);
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/following', [FollowController::class, 'index2']);

    Route::middleware(['auth:sanctum', 'verified'])->get('/following.data', [FollowController::class, 'anyData2']);

    Route::middleware(['auth:sanctum', 'verified'])->get('/following', [FollowController::class, 'getIndex2']);
});

// -------------------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------------------

// Dashboard Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Homepage Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/homepage', function () {
    return view('screens.user.home.homepage');
})->name('homepage');

// Recipe Search - Result Display Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/recipe_view/{recipe}', [RecipeController::class, 'view_recipe']);


Route::get('/view_recipe/{recipe}', [RecipeController::class, 'nonLoginUser_view_recipe']);
//Recipe Like
// Route::middleware(['auth:sanctum', 'verified'])->get('like', [RecipeController::class, 'likePost'])->name('like');

// Recipe Search Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/search_ingredient', [RecipeController::class, 'search1']);

Route::middleware(['auth:sanctum', 'verified'])->get('/welcome', [RecipeController::class, 'search']);
// Route::middleware(['auth:sanctum', 'verified'])->get('/welcome_homechef', [RecipeController::class, 'homechef_search']);
// Route::middleware(['auth:sanctum', 'verified'])->get('/welcome_all', [RecipeController::class, 'search_all']);
// Recipeat Customer Data Table - Data Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/users.data', [CreateNewUser::class, 'anyData']);

// Recipeat Customer Data Table - Index Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/all_user', [CreateNewUser::class, 'getIndex']);

// -------------------------------------------------------------------------------------------------------------------
//                                                    Admin Routes
// -------------------------------------------------------------------------------------------------------------------

// User Invite-Datatable Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/add_user', [InviteController::class, 'index']);

// User Invite Invite Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/invite', [InviteController::class, 'invite']);

// User Invite Process Tab
Route::middleware(['auth:sanctum', 'verified'])->post('/invite', [InviteController::class, 'process']);

// User Invite Aceept Tab
Route::get('accept/{token}', [InviteController::class, 'accept']);

// User Invite Data Table - Data Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/customers.data', [InviteController::class, 'anyData']);

// User Invite Data Table - Index Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/customers', [InviteController::class, 'getIndex']);

// -------------------------------------------------------------------------------------------------------------------
//                                                     Admin-Recipe Routes
// -------------------------------------------------------------------------------------------------------------------

//Admin_recipe
Route::middleware(['auth:sanctum', 'verified'])->get('/admin_recipe', function () {
    return view('screens.admin.recipe.admin_recipe');
});

// RecipeController
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Recipeat Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/approve', [RecipeController::class, 'index1']);

    // Recipeat Approve Data Table - Data Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/approve.data', [RecipeController::class, 'anyData1']);

    // Recipeat Approve Data Table - Index Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/approve', [RecipeController::class, 'getIndex1']);

    //funtion of Approve button
    Route::middleware(['auth:sanctum', 'verified'])->get('/approve/{recipe}/approve', [RecipeController::class, 'Approve']);

    //Denide Recipie button
    Route::middleware(['auth:sanctum', 'verified'])->get('/approve/{recipe}/denide', [RecipeController::class, 'denide']);

    Route::middleware(['auth:sanctum', 'verified'])->get('/all_recipes', [RecipeController::class, 'index2']);

    Route::middleware(['auth:sanctum', 'verified'])->get('/allrecipe.data', [RecipeController::class, 'anyData2']);

    Route::middleware(['auth:sanctum', 'verified'])->get('/all_recipes', [RecipeController::class, 'getIndex2']);

//     Route::middleware(['auth:sanctum', 'verified'])->get('/add_feed', [RecipeController::class, 'index3']);

//     Route::middleware(['auth:sanctum', 'verified'])->get('/all.data', [RecipeController::class, 'anyData3']);

//     Route::middleware(['auth:sanctum', 'verified'])->get('/add_feed', [RecipeController::class, 'getIndex3']);
 });

// CategoryController
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Index Category Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/categorys', [CategoryController::class, 'index']);

    // Add Category Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/categorys_create', [CategoryController::class, 'create']);

    // Store Category Tab
    Route::middleware(['auth:sanctum', 'verified'])->post('/categorys', [CategoryController::class, 'store']);

    // Edit Category Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/categorys/{category}/edit', [CategoryController::class, 'edit']);

    // Update Category Tab
    Route::middleware(['auth:sanctum', 'verified'])->patch('/categorys/{category}', [CategoryController::class, 'update']);

    // Destroy Category Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/categorys/{category}/delete', [CategoryController::class, 'destroy']);

    // Recipeat Category Data Table - Data Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/category.data', [CategoryController::class, 'anyData']);

    // Recipeat Category Data Table - Index Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/categorys_create', [CategoryController::class, 'getIndex']);
});

// CuisineController
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Index Cuisine Tab
    Route::middleware(['auth::sanctum', 'verified'])->get('/cuisines', [CuisineController::class, 'index']);

    // Add Cuisine Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/cuisines_create', [CuisineController::class, 'create']);

    // Store Cuisine Tab
    Route::middleware(['auth:sanctum', 'verified'])->post('/cuisines', [CuisineController::class, 'store']);

    // Edit Cuisine Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/cuisines/{cuisine}/edit', [CuisineController::class, 'edit']);

    // Update Cuisine Tab
    Route::middleware(['auth:sanctum', 'verified'])->patch('/cuisines/{cuisine}', [CuisineController::class, 'update']);

    // Destroy Cuisine Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/cuisines/{cuisine}/delete', [CuisineController::class, 'destroy']);

    // Recipeat Cuisine Data Table - Data Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/cuisine.data', [CuisineController::class, 'anyData']);

    // Recipeat Cuisine Data Table - Index Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/cuisines_create', [CuisineController::class, 'getIndex']);
});

// IngredientController
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Index Ingredient Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/ingredients', [IngredientController::class, 'index']);

    // Add Ingredient Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/ingredients_create', [IngredientController::class, 'create']);

    // Store Ingredient Tab
    Route::middleware(['auth:sanctum', 'verified'])->post('/ingredients', [IngredientController::class, 'store']);

    // Edit Ingredient Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/ingredients/{ingredient}/edit', [IngredientController::class, 'edit']);

    // Update Ingredient Tab
    Route::middleware(['auth:sanctum', 'verified'])->patch('/ingredients/{ingredient}', [IngredientController::class, 'update']);

    // Destroy ingredient Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/ingredients/{ingredient}/delete', [IngredientController::class, 'destroy']);

    // Recipeat Ingredient Data Table - Data Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/ingredient.data', [IngredientController::class, 'anyData']);

    // Recipeat Ingredient Data Table - Index Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/ingredients_create', [IngredientController::class, 'getIndex']);
});

// MeasurementController
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Index Measurement Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/measurements', [MeasurementController::class, 'index']);

    // Add Measurement Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/measurements_create', [MeasurementController::class, 'create']);

    // Store Measurement Tab
    Route::middleware(['auth:sanctum', 'verified'])->post('/measurements', [MeasurementController::class, 'store']);

    // Edit Measurement Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/measurements/{measurement}/edit', [MeasurementController::class, 'edit']);

    // Update Measurement Tab
    Route::middleware(['auth:sanctum', 'verified'])->patch('/measurements/{measurement}', [MeasurementController::class, 'update']);

    // Destroy Measurement Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/measurements/{measurement}/delete', [MeasurementController::class, 'destroy']);
    // Recipeat Measurement Data Table - Data Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/measurement.data', [MeasurementController::class, 'anyData']);

    // Recipeat Measurement Data Table - Index Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/measurements_create', [MeasurementController::class, 'getIndex']);
});

// -------------------------------------------------------------------------------------------------------------------
//                                                    User Routes
// -------------------------------------------------------------------------------------------------------------------

// Update Password Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/update_password', function () {
    return view('screens.user.profile.change_password');
});

// User profile tab
Route::middleware(['auth:sanctum', 'verified'])->get('/my_profile', [Questionnaire::class, 'show']);

// Edit User Profile Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/edit_profile', [Questionnaire::class, 'edit']);

// Upadte User Profile Tab
Route::middleware(['auth:sanctum', 'verified'])->patch('/update_profile', [Questionnaire::class, 'update']);

// Porrtfolio tab
Route::middleware(['auth:sanctum', 'verified'])->get('/my_portfolio', [ChefQuestion::class, 'show']);

// Edit Portfolio tab
Route::middleware(['auth:sanctum', 'verified'])->get('/edit_portfolio', [ChefQuestion::class, 'edit']);

// Update Portfolio tab
Route::middleware(['auth:sanctum', 'verified'])->patch('/update_portfolio', [ChefQuestion::class, 'update']);

// -------------------------------------------------------------------------------------------------------------------
//                                                     User-Recipe Routes
// -------------------------------------------------------------------------------------------------------------------

// Index Recipe Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/recipes', [RecipeController::class, 'index']);

// Create Recipe Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/recipes_create', [RecipeController::class, 'create']);

// Store Recipe Tab
Route::middleware(['auth:sanctum', 'verified'])->post('/recipes', [RecipeController::class, 'store']);

// Edit Recipe Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/recipes/{recipe}/edit', [RecipeController::class, 'edit']);

// Update Recipe Tab
Route::middleware(['auth:sanctum', 'verified'])->patch('/recipes/{recipe}', [RecipeController::class, 'update']);

// Delete Recipe Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/recipes/{recipe}/delete', [RecipeController::class, 'destroy']);

// Recipe Post Data Table - Data Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/recipes.data', [RecipeController::class, 'anyData']);

// Recipe Post Data Table - Index Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/recipes', [RecipeController::class, 'getIndex']);

// -------------------------------------------------------------------------------------------------------------------
//                                                     Question Routes
// -------------------------------------------------------------------------------------------------------------------

// User Questionnaire Tab
Route::middleware(['auth:sanctum', 'verified'])->get('home', function () {
    if (auth()->user()->hasRole('Admin')) {
        return view('dashboard');
    } else {
        return view('screens.user.home.questions');
    }
})->name('home');

// -------------------------------------------------------------------------------------------------------------------
//                                                    Follow Routes
// -------------------------------------------------------------------------------------------------------------------

Route::middleware(['auth:sanctum', 'verified'])->get('/my_follower', [FollowController::class, 'index'], function () {
    return view('screens.user.profile.follower');
})->name('projects.index');

Route::any('/search', function () {
    $q = Request::input('q');
    if ($q != '') {
        $projects = User::where('name', '!=', 'admin')->where('name', 'LIKE', '%' . $q . '%')->where('id', '!=', auth()->id())
            ->paginate(4);
        $projects->appends(array(
            'q' => Request::input('q'),
        ));
        return view('screens.user.profile.follower', compact('projects'));
    }
    return view('screens.user.profile.follower');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('my_follower/{profileId}/follow', [FollowController::class, 'followUser'])->name('user.follow');

// Route::middleware(['auth:sanctum', 'verified'])->get('/{profileId}/unfollow', [FollowController::class, 'unFollowUser'])->name('user.unfollow');

Route::middleware(['auth:sanctum', 'verified'])->post('/follow', [FollowController::class, 'followOrUnfollowuser']);
Route::middleware(['auth:sanctum', 'verified'])->get('/x', function () {
    // $user=Auth::user();
    // $user->notify(new NewFollower(User::findOrFail(2)));die;
    foreach (auth()->user()->unreadnotifications as $notification) {
        $notification->markAsRead();
    }
});
// Welcome Tab
Route::get('/notifications', function () {
    foreach (auth()->user()->unreadnotifications as $notification) {
        $notification->markAsRead();
    }
    return view('screens.user.profile.notifications_screen');
});
//Contact Us
Route::get('/contactUs', function () {
    return view('contactUs');
});
// -------------------------------------------------------------
//                              Test Routes
// ------------------------------------------------------------
Route::middleware(['auth:sanctum', 'verified'])->get('/login2', function () {
    return view('screens.user.profile.login2');
});
//---------------------------------------------------------------------------
//                               Comment Routes
//-------------------------------------------------------------------------------
 Route::middleware(['auth:sanctum', 'verified'])->post('/comment/store', [CommentController::class,'store'])->name('comment.add');
 Route::middleware(['auth:sanctum', 'verified'])->post('/reply/store', [CommentController::class,'replyStore'])->name('reply.add');

//-----------------------------------------------------------------------------------------------
//                                Like Routes
//--------------------------------------------------------------------------------------------------
//  Route::get('/', function (Request $request) {
//      if (User::count() < 3) {
//          User::factory()->count(3)->create();
//     }

//      if (auth()->guest() && $request->has('login')) {
//          auth()->login(User::inRandomOrder()->first());
//      }

//      if (auth()->check() && $request->has('logout')) {
//          auth()->logout();
//      }

//     // if (Recipe::count() < 5) {
//     //     Recipe::factory()->count(5)->create();
//     // }

//      $recipes = Recipe::latest()->with('likes')->take(5)->get();

Route::middleware(['auth:sanctum', 'verified'])->post('like', [LikeController::class,'like'])->name('like');
 Route::middleware(['auth:sanctum', 'verified'])->delete('like', [LikeController::class,'unlike'])->name('unlike');
//---------------------------------------------------------------------------------------
//                              pinboard-Admin
//----------------------------------------------------------------------------------------
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Index Cuisine Tab
    Route::middleware(['auth::sanctum', 'verified'])->get('/pins', [PinboardController::class, 'index']);

    // Add Cuisine Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/pins_create', [PinboardController::class, 'create']);

    // Store Cuisine Tab
    Route::middleware(['auth:sanctum', 'verified'])->post('/pins', [PinboardController::class, 'store']);

    // Edit Cuisine Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/pins/{pin}/edit', [PinboardController::class, 'edit']);

    // Update Cuisine Tab
    Route::middleware(['auth:sanctum', 'verified'])->patch('/pins_create', [PinboardController::class, 'destroy']);

    // Recipeat Cuisine Data Table - Data Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/pins.data', [PinboardController::class, 'anyData']);

    // Recipeat Cuisine Data Table - Index Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/pins_create', [PinboardController::class, 'getIndex']);
});
//---------------------------------------------------------------------------------------
//                              pinboard
//----------------------------------------------------------------------------------------
// Route::middleware(['auth:sanctum', 'verified'])->get('/pinboard', function () {
//     return view('screens.user.profile.pinboard');
// });
// Route::middleware(['auth:sanctum', 'verified'])->get('/pinboard',[PinboardController::class, 'show']);
//----------------------------------------------------------------------------------------
//                              PinRecipe
//----------------------------------------------------------------------------------------
// PinRecipeController for my favourite
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Index pinrecipe Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/myfavourite', [PinRecipeController::class, 'index']);
    // Store Category Tab
    Route::middleware(['auth:sanctum', 'verified'])->post('/recipe_view/{recipe}', [PinRecipeController::class, 'store']);
    // Edit Category Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/recipe/{recipe}/view', [PinRecipeController::class, 'view']);
    // Destroy Category Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/recipe/{recipe}/delete', [PinRcipeController::class, 'destroy']);
    // Recipeat Category Data Table - Data Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/recipe_pin.data', [PinRecipeController::class, 'anyData']);

    // Recipeat Category Data Table - Index Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/myfavourite', [PinRecipeController::class, 'getIndex']);
});
// PinRecipeController for Familyfavourite
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Index familyfav Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/familyfav', [PinRecipeController::class, 'index1']);
    // Anydata  for familyfav Data Table - Data Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/familyfav.data', [PinRecipeController::class, 'anyData1']);
    // getndex for family fav
    Route::middleware(['auth:sanctum', 'verified'])->get('/familyfav', [PinRecipeController::class, 'getIndex1']);
});
// PinRecipeController for FavDesert
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Index favourite desert Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/favdesert', [PinRecipeController::class, 'index2']);

    // Anydata  for favourite desert Data Table - Data Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/favdesert.data', [PinRecipeController::class, 'anyData2']);

    // getndex for favourite desert
    Route::middleware(['auth:sanctum', 'verified'])->get('/favdesert', [PinRecipeController::class, 'getIndex2']);
});
// PinRecipeController for FavDinner
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Index favourite dinner Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/favdinner', [PinRecipeController::class, 'index3']);

    // Anydata  for favourite dinner Data Table - Data Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/favdinner.data', [PinRecipeController::class, 'anyData3']);

    // getndex for favouritedinner
    Route::middleware(['auth:sanctum', 'verified'])->get('/favdinner', [PinRecipeController::class, 'getIndex3']);
});
 Route::middleware(['auth:sanctum', 'verified'])->get('/add_feed', function () {
    return view('screens.admin.newsfeed.add_feed');
 });
