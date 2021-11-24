<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
// use App\Models\User;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    echo 'This is Home Page';
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Category Controller
Route::get('/category/all', [CategoryController::class, 'allCat'])->name('all.category');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    $users = DB::table('users')->get();
    return view('dashboard', compact('users'));
})->name('dashboard');
