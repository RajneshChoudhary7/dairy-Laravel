<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
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
    Route::put('/{id}', [ProductController::class, 'update'])->name('products.update'); // ✅ fixed
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/grid', [ProductController::class, 'grid'])->name('products.grid');

    // Product Details Page
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// Optional: Add to Cart
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

// Optional: Buy Now
Route::post('/checkout/buy-now/{id}', [CheckoutController::class, 'buyNow'])->name('checkout.buyNow');

// Buy Now single product
Route::post('/checkout/buy-now/{id}', [CheckoutController::class, 'buyNow'])->name('checkout.buyNow');

// Cart Checkout page
Route::get('/checkout', [CheckoutController::class, 'cartCheckout'])->name('checkout');

// Place order
Route::post('/checkout/place-order', [CheckoutController::class, 'placeOrder'])->name('checkout.placeOrder');

////// cartcontrller 

Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');


Route::post('/checkout/buy-now/{id}', [CheckoutController::class, 'buyNow'])->name('checkout.buyNow');
Route::get('/checkout', [CheckoutController::class, 'cartCheckout'])->name('checkout');
Route::post('/checkout/place-order', [CheckoutController::class, 'placeOrder'])->name('checkout.placeOrder');

// cart routes (ensure these exist)
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
});



// Specific product categories
Route::get('/milk', [ProductController::class, 'milk'])->name('Milk');
Route::get('/dahi', [ProductController::class, 'dahi'])->name('Dahi');
Route::get('/paneer', [ProductController::class, 'paneer'])->name('Paneer');
Route::get('/butter', [ProductController::class, 'butter'])->name('Butter');
Route::get('/ghee', [ProductController::class, 'ghee'])->name('Ghee');
Route::get('/icecream', [ProductController::class, 'iceCream'])->name('IceCream');
Route::get('/lassi', [ProductController::class, 'lassi'])->name('Lassi');
Route::get('/healthproducts', [ProductController::class, 'healthProducts'])->name('HealthProducts');

Route::post('/products/add-to-table/{name}', [ProductController::class, 'addToTable'])->name('products.addToTable');






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

    // Main dashboard route — role ke hisaab se redirect
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Use new controllers instead of DashboardController
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/staff/dashboard', [StaffController::class, 'index'])->name('staff.dashboard');
    Route::get('/supplier/dashboard', [SupplierController::class, 'index'])->name('supplier.dashboard');
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});



////////////////////



use App\Http\Controllers\TaskController;

Route::prefix('tasks')->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('/{id}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');
});