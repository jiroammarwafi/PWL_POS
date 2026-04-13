<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route Halaman Home
Route::get ('/home', [HomeController::class, 'home']);

// Route Halaman Products
Route::get ('/products/category/food-beverage', [ProductController::class, 'ctgFoodBeverage']);
Route::get ('/products/category/beauty-health', [ProductController::class, 'ctgBeautyHealth']);
Route::get ('/products/category/home-care', [ProductController::class, 'ctgHomeCare']);
Route::get ('/products/category/baby-kids', [ProductController::class, 'ctgBabyKids']);

// Route Halaman User
Route::get ('/user/{id}/name/{name}', [UserController::class, 'show']);

// Route Halaman Penjualan
Route::get ('/sales', [SalesController::class, 'Sales']);

Route::get('/level', [LevelController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/tambah', [UserController::class, 'tambah']);