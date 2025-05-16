<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index']);
Route::get('/categories', [HomeController::class, 'category']);
Route::get('/product_details', [HomeController::class, 'productDetails']);
Route::get('/checkout', [HomeController::class, 'checkout']);
Route::get('/blogs', [HomeController::class, 'blog']);
Route::get('/blog_details', [HomeController::class, 'blogDetails']);
Route::get('/cart', [HomeController::class, 'cart']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/tracking', [HomeController::class, 'tracking']);
Route::get('/elements', [HomeController::class, 'elements']);

