<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Kernel;
use App\Http\Middleware\CheckRole;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --------------------- Public Pages ---------------------
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::view('/home', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');
Route::view('/welcome', 'welcome')->name('welcome');
// Removed duplicate Route::view for 'products' to avoid conflict with resourceful routes

// --------------------- Product Pages ---------------------
Route::prefix('products')->group(function () {
Route::get('/', [ProductController::class, 'home'])->name('products.home');
    Route::get('/index', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/', [ProductController::class, 'store'])->name('products.store');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/{id}/update', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/grid', [ProductController::class, 'grid'])->name('products.grid');
});

// Specific product categories
Route::view('/milk', 'Milk')->name('Milk');
Route::view('/dahi', 'Dahi')->name('Dahi');
Route::view('/paneer', 'Paneer')->name('Paneer');
Route::view('/butter', 'Butter')->name('Butter');
Route::view('/ghee', 'Ghee')->name('Ghee');
Route::view('/icecream', 'IceCream')->name('IceCream');
Route::view('/lassi', 'Lassi')->name('Lassi');

Route::view('/health-products', 'health-products')->name('HealthProducts');



// --------------------- Authentication Routes ---------------------
Route::middleware('guest')->group(function () {
    Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signupSubmit'])->name('signup.submit');
    
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');
    Route::post('/face-login', [AuthController::class, 'faceLogin'])->name('face.login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});

// --------------------- Protected Routes ---------------------
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Main dashboard that redirects based on role
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Role-specific dashboards
    Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])
    ->middleware('checkRole:admin')
    ->name('admin.dashboard');
    
    Route::get('/staff/dashboard', [DashboardController::class, 'staffDashboard'])
        ->middleware('checkRole:staff')
        ->name('staff.dashboard');
    
    Route::get('/supplier/dashboard', [DashboardController::class, 'supplierDashboard'])
        ->middleware('checkRole:supplier')
        ->name('supplier.dashboard');
    
    Route::get('/user/dashboard', [DashboardController::class, 'userDashboard'])
        ->middleware('checkRole:customer')
        ->name('user.dashboard');
});
