<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainpageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardProductController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainpageController::class, 'mainpage']);

// Login Layout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// Register Layout
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('admin.dashboard.index');     
})->middleware('auth');

Route::get('/card', function () {
    return view('card'); 
});

//  Layouts Contents
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/image', function () {
    return view('layouts/imagegl');
});


// Macam macam produk laptop dan keterangannya
Route::get('/produk/toshiba-r73', function () {
    return view('products/product1');
});
Route::get('/produk/fujitsu-lifebook-p727', function () {
    return view('products/product2');
});
Route::get('/produk/lenovo-ideapad-slim5', function () {
    return view('products/product3');
});
Route::get('/produk/lenovo-ideapad-3-i3gen11', function () {
    return view('products/product4');
});
Route::get('/produk/pc-dell-optiplex7050-i5gen6', function () {
    return view('products/product5');
});
Route::get('/produk/lenovo-x240-i5gen4', function () {
    return view('products/product6');
});
Route::get('/produk/lenovo-m92p-i5gen3', function () {
    return view('products/product7');
});
Route::get('/produk/dell-vostro-3405', function () {
    return view('products/product8');
});
Route::get('/produk/macbook-pro-2013-i5', function () {
    return view('products/product9');
});
Route::get('/produk/lenovo-x1carbon-3rd-i5gen5', function () {
    return view('products/product10');
});
Route::get('/produk/tab-nec-versapro vs- u', function () {
    return view('products/product11');
});
Route::get('/produk/x1-carbon4th-i7gen6', function () {
    return view('products/product12');
});

Route::resource('/dashboard/products-solit', DashboardProductController::class)->middleware('auth');