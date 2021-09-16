<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CuisineController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\RecipeController;

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

// Add Category Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/categorys_create', [CategoryController::class, 'create']);

// Store Category Tab
Route::middleware(['auth:sanctum', 'verified'])->post('/categorys', [CategoryController::class, 'store']);

// Add Cuisine Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/cuisines_create', [CuisineController::class, 'create']);

// Store Cuisine Tab
Route::middleware(['auth:sanctum', 'verified'])->post('/cuisines', [CuisineController::class, 'store']);

// Add Ingredient Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/ingredients_create', [IngredientController::class, 'create']);

// Store Ingredient Tab
Route::middleware(['auth:sanctum', 'verified'])->post('/ingredients', [IngredientController::class, 'store']);

// Add Measurement Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/measurements_create', [MeasurementController::class, 'create']);

// Store Measurement Tab
Route::middleware(['auth:sanctum', 'verified'])->post('/measurements', [MeasurementController::class, 'store']);

// -------------------------------------------------------------------------------------------------------------------
//                                                    User Routes
// -------------------------------------------------------------------------------------------------------------------

Route::middleware(['auth:sanctum', 'verified'])->get('/update_password', function () {
    return view('screens.user.profile.change_password');
});

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

// // User Questionnaire Tab
Route::middleware(['auth:sanctum', 'verified'])->get('home', function () {
    if (auth()->user()->hasRole('Chef')) {
        return view('screens.user.home.questions');
    } else {
        return view('dashboard');
    }
})->name('home');
