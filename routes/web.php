<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CuisineController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\MeasurementController;

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

// User Invite-Datatable Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/add_user', [InviteController::class, 'index']);

// User Invite Invite Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/invite', [InviteController::class, 'invite']);

// User Invite Process Tab
Route::middleware(['auth:sanctum', 'verified'])->post('/invite', [InviteController::class, 'process']);

// User Invite Aceept Tab
Route::get('accept/{token}', [InviteController::class, 'accept']);

// User Invite Data Table - Data
Route::middleware(['auth:sanctum', 'verified'])->get('/customers.data', [InviteController::class, 'anyData']);

// User Invute Data Table - Index
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

// Save Category Tab
Route::middleware(['auth:sanctum', 'verified'])->post('/categorys', [CategoryController::class, 'save']);

// Add Cuisine Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/cuisines_create', [CuisineController::class, 'create']);

// Store Cuisine Tab
Route::middleware(['auth:sanctum', 'verified'])->post('/cuisines', [CuisineController::class, 'store']);

// Save Cuisine Tab
Route::middleware(['auth:sanctum', 'verified'])->post('/cuisines', [CuisineController::class, 'save']);

// Add Ingredient Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/ingredients_create', [IngredientController::class, 'create']);

// Store Ingredient Tab
Route::middleware(['auth:sanctum', 'verified'])->post('/ingredients', [IngredientController::class, 'store']);

// Save Ingredient Tab
Route::middleware(['auth:sanctum', 'verified'])->post('/ingredients', [IngredientController::class, 'save']);

// Add Measurement Tab
Route::middleware(['auth:sanctum', 'verified'])->get('/measurements_create', [MeasurementController::class, 'create']);

// Store Measurement Tab
Route::middleware(['auth:sanctum', 'verified'])->post('/measurements', [MeasurementController::class, 'store']);

// Save Measurement Tab
Route::middleware(['auth:sanctum', 'verified'])->post('/measurements', [MeasurementController::class, 'save']);
