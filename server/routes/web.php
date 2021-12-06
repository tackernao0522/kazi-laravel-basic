<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ChangePass;
use App\Models\Brand;
use App\Models\Multipic;
// use App\Models\User;
use Illuminate\Support\Facades\DB;

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $images = Multipic::all();

    return view('home')
        ->with('brands', $brands)
        ->with('abouts', $abouts)
        ->with('images', $images);
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
Route::post('/category/add', [CategoryController::class, 'addCat'])->name('store.category');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/softdelete/category/{id}', [CategoryController::class, 'softDelete']);
Route::get('/category/restore/{id}', [CategoryController::class, 'restore']);
Route::get('/pdelete/category/{id}', [CategoryController::class, 'pDelete']);

// Brand Controller
Route::get('/brand/all', [BrandController::class, 'allBrand'])->name('all.brand');
Route::post('/brand/add', [BrandController::class, 'storeBrand'])->name('store.brand');
Route::get('/brand/edit/{id}', [BrandController::class, 'edit']);
Route::post('/brand/update/{id}', [BrandController::class, 'update']);
Route::get('/brand/delete/{id}', [BrandController::class, 'delete']);

// Multi Image Route
Route::get('/multi/image', [BrandController::class, 'multipic'])->name('multi.image');
Route::post('/multi/add', [BrandController::class, 'storeImg'])->name('store.image');

// Admin All Route
Route::get('/home/slider', [HomeController::class, 'homeSlider'])->name('home.slider');
Route::get('/add/slider', [HomeController::class, 'addSlider'])->name('add.slider');
Route::post('/store/slider', [HomeController::class, 'storeSlider'])->name('store.slider');

// Home Abut All Route
Route::get('/home/about', [AboutController::class, 'homeAbout'])->name('home.about');
Route::get('/add/about', [AboutController::class, 'addAbout'])->name('add.about');
Route::post('/store/about', [AboutController::class, 'storeAbout'])->name('store.about');
Route::get('/about/edit/{id}', [AboutController::class, 'editAbout']);
Route::post('/update/home_about/{id}', [AboutController::class, 'updateAbout']);
Route::get('/about/delete/{id}', [AboutController::class, 'deleteAbout']);

// Portfolio Page Route
Route::get('/portfolio', [AboutController::class, 'portfolio'])->name('portfolio');

// Admin Contact Page Route
Route::get('/admin/contact', [ContactController::class, 'adminContact'])->name('admin.contact');
Route::get('/admin/add/contact', [ContactController::class, 'adminAddContact'])->name('add.contact');
Route::post('/admin/store/contact', [ContactController::class, 'adminStoreContact'])->name('store.contact');
Route::get('/admin/message', [ContactController::class, 'adminMessage'])->name('admin.message');
Route::get('/message/delete/{id}', [ContactController::class, 'deleteMessage']);

// Home Contact Page Route
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact/form', [ContactController::class, 'contactForm'])->name('contact.form');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');

// Change Password and User Profile Route
Route::get('/user/password', [ChangePass::class, 'cPassword'])->name('change.password');
Route::post('/password/update', [ChangePass::class, 'updatePassword'])->name('password.update');