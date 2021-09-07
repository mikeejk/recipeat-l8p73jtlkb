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

Route::middleware(['auth:sanctum', 'verified'])->get('/user', function () {
    return view('screens.admin.invite.user');
})->name('user');

Route::middleware(['auth:sanctum', 'verified'])->get('/add_user', function () {
    return view('screens.admin.invite.add');
})->name('add_user');



