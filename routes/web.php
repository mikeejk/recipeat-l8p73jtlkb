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

