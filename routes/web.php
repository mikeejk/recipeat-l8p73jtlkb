<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InviteController;

// -------------------------------------------------------------------------------------------------------------------
//                                                    Other Routes
// -------------------------------------------------------------------------------------------------------------------

// Welcome Tab
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// -------------------------------------------------------------------------------------------------------------------
//                                                    Admin Routes
// -------------------------------------------------------------------------------------------------------------------
//user
Route::middleware(['auth:sanctum', 'verified'])->get('/user', function () {
    return view('screens.admin.invite.user');
});

// User Invite-Datatable Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/add_user', [InviteController::class, 'index']);

// User Invite Invite Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/invite', [InviteController::class, 'invite']);

// User Invite Process Tab
Route::middleware(['auth:sanctum', 'verified'])->post('/invite', [InviteController::class, 'process']);

// User Invite Aceept Tab
Route::get('accept/{token}', [InviteController::class, 'accept']);

// -------------------------------------------------------------------------------------------------------------------
//                                                     Admin-Recipe Routes
// -------------------------------------------------------------------------------------------------------------------

//Admin_recipe
Route::middleware(['auth:sanctum', 'verified'])->get('/adminRecipe', function () {
    return view('screens.admin.recipe.admin_recipe');
});
//Add Category
Route::middleware(['auth:sanctum', 'verified'])->get('/addCategory', function () {
    return view('screens.admin.recipe.add_category');
});
//Add Cuisine
Route::middleware(['auth:sanctum', 'verified'])->get('/addCuisine', function () {
    return view('screens.admin.recipe.add_cuisine');
});
//Add Ingredient
Route::middleware(['auth:sanctum', 'verified'])->get('/addIngredient', function () {
    return view('screens.admin.recipe.add_ingredient');
});
//Add Measurement
Route::middleware(['auth:sanctum', 'verified'])->get('/addMeasurement', function () {
    return view('screens.admin.recipe.add_measurement');
});


