<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --------------------- Public Pages ---------------------
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// --------------------- Product Pages ---------------------
// ProductController (RESTful)
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index'); // List all products
    Route::get('/create', [ProductController::class, 'create'])->name('products.create'); // Add form
    Route::post('/', [ProductController::class, 'store'])->name('products.store'); // Store new product
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Edit product
    Route::post('/{id}/update', [ProductController::class, 'update'])->name('products.update'); // Update product
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); // Delete product
    Route::get('/grid', [ProductController::class, 'grid'])->name('products.grid'); // Grid view
});

// Specific product categories (static views)
Route::view('/milk', 'Milk')->name('Milk');
Route::view('/dahi', 'Dahi')->name('Dahi');
Route::view('/paneer', 'Paneer')->name('Paneer');
Route::view('/butter', 'Butter')->name('Butter');
Route::view('/ghee', 'Ghee')->name('Ghee');
Route::view('/icecream', 'IceCream')->name('IceCream');
Route::view('/lassi', 'Lassi')->name('Lassi');

// --------------------- Authentication ---------------------
// Auth
Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.submit');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');


// Face login (AJAX call)
Route::post('/face-login', [AuthController::class, 'faceLogin'])->name('face.login');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// --------------------- Admin & User Dashboard ---------------------
Route::middleware(['auth', 'checkRole:admin'])->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'checkRole:staff,customer,supplier'])->group(function() {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});


Route::get('/health-products', function () {
    return view('health-products'); // resources/views/health-products.blade.php
})->name('HealthProducts');


Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/user/dashboard', [DashboardController::class, 'userDashboard'])->name('user.dashboard');
Route::get('/staff/dashboard', [DashboardController::class, 'staffDashboard'])->name('staff.dashboard');
Route::get('/supplier/dashboard', [DashboardController::class, 'supplierDashboard'])->name('supplier.dashboard');

