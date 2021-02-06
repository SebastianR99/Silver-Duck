<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;

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

Route::get('/', [HomeController::class, 'getHome'] );
//
Route::get('/Men/product-men', [CatalogController::class, 'getProductMen']);
//
Route::get('/Men/product-men-casual', [CatalogController::class, 'getProductMenCasual']);
//
Route::get('/Men/product-men-sport', [CatalogController::class, 'getProductMenSport']);
//
Route::get('/Men/product-men-formal', [CatalogController::class, 'getProductMenFormal']);
//
Route::get('/Women/product-women', [CatalogController::class, 'getProductWomen']);
//
Route::get('/Women/product-women-casual', [CatalogController::class, 'getProductWomenCasual']);
//
Route::get('/Women/product-women-sport', [CatalogController::class, 'getProductWomenSport']);
//
Route::get('/Women/product-women-formal', [CatalogController::class, 'getProductWomenFormal']);