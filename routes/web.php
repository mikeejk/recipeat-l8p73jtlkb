<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CuisineController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ApproveController;
use App\Http\Livewire\Questionnaire;
use App\Actions\Fortify\CreateNewUser;

// -------------------------------------------------------------------------------------------------------------------
//                                                    Other Routes
// -------------------------------------------------------------------------------------------------------------------

// Welcome Tab
Route::get('/', function () {
    return view('auth.login');
});

// Dashboard Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Recipe Search - Result Display Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/recipeview/{recipe}',[RecipeController::class, 'view_recipe']);

// Recipe Search Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/welcome', [RecipeController::class, 'search'])->name('web.search');

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

// ApproveController
Route::middleware(['auth:sanctum', 'verified'])->group(function ()
{
    // Approve Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/approve', [ApproveController::class, 'index']);

    // Recipeat Approve Data Table - Data Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/approve.data', [ApproveController::class, 'anyData']);

    // Recipeat Approve Data Table - Index Tab
    Route::middleware(['auth:sanctum', 'verified'])->get('/approve', [ApproveController::class, 'getIndex']);
});

// CategoryController
Route::middleware(['auth:sanctum', 'verified'])->group(function ()
{
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
Route::middleware(['auth:sanctum', 'verified'])->group(function ()
{
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
Route::middleware(['auth:sanctum', 'verified'])->group(function ()
{
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
Route::middleware(['auth:sanctum', 'verified'])->group(function ()
{
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

//user profile
Route::middleware(['auth:sanctum', 'verified'])->get('/my_profile', [Questionnaire::class, 'profile']);

// Edit User Profile Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/edit_profile', [Questionnaire::class, 'edit']);

// Upadte User Profile Tab
Route::middleware(['auth:sanctum', 'verified'])->patch('/edit_profile', [Questionnaire::class, 'update']);

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
   if (auth()->user()->hasRole('Home-Chef|Chef')) {
        return view('screens.user.home.questions');
   } else {
       return view('dashboard');
   }
})->name('home');

// -------------------------------------------------------------------------------------------------------------------
//                                                     Testing Routes
// -------------------------------------------------------------------------------------------------------------------

//Follower
Route::middleware(['auth:sanctum', 'verified'])->get('/my_follower', function () {
    return view('screens.user.profile.follower');
    });
