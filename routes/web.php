<?php

use Illuminate\Support\Facades\Route;

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

//Add User
Route::middleware(['auth:sanctum', 'verified'])->get('/addUser', function () {
    return view('screens.admin.invite.add');
});

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


