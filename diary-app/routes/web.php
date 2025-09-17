<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('home');
})->name('home');   // Naming '/' route as 'home'

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

// Route::get('/products', function () {
//     return view('products');
// })->name('products');
Route::get('/products', [ProductsController::class, 'products'])->name('products');;

Route::get('/Milk', function () {
    return view('Milk');
})->name('Milk');

Route::get('/Dahi', function () {
    return view('Dahi');
})->name('Dahi');

Route::get('/Paneer', function () {
    return view('Paneer');
})->name('Paneer');

Route::get('/Butter', function () {
    return view('Butter');
})->name('Butter');

Route::get('/IceCream', function () {
    return view('IceCream');
})->name('IceCream');

Route::get('/Lassi', function () {
    return view('Lassi');
})->name('Lassi');

Route::get('/Lassi', function () {
    return view('Lassi');
})->name('Lassi');

Route::get('/IceCream', function () {
    return view('IceCream');
})->name('IceCream');

Route::get('/Butter', function () {
    return view('Butter');
})->name('Butter');

Route::get('/Ghee', function () {
    return view('Ghee');
})->name('Ghee');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/layout', function () {
    return view('app');
})->name('layout');

