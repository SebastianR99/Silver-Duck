<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use App\Models\Products;


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
Route::get('/index', [HomeController::class, 'getHome'] );
//
Route::get('/no', [CatalogController::class, 'getHomeno'] )->name('no');
//
Route::get('/logout', [LoginController::class, 'logout'] );
//
Route::get('/contact', [UserController::class, 'getContact'] );
//
Route::get('/product', [CatalogController::class, 'getProduct']);
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
//
Route::get('/product-detail/{product_id}', [CatalogController::class, 'getDetail']);
//
Route::get('/cart', [CatalogController::class, 'getCart']);
//
Route::get('/checkout', [CatalogController::class, 'getCheckout']);
//
Route::get('/account', [UserController::class, 'getAccount'] );
//
Route::get('/wishlist', [UserController::class, 'getWishlist'] );
//
Route::get('/user-form', [UserController::class, 'getForm'] );
//
Route::post('/user-form-post', [UserController::class, 'postForm'] );
//
Route::get('/prueba', [CatalogController::class, 'prueba']);
//
Route::get('/login-no', [CatalogController::class, 'loginNo']);
//
Route::post('/post-product', [CatalogController::class, 'addProduct']);
//
Route::post('/delete-product', [CatalogController::class, 'deleteProduct']);
//
Route::get('/end-checkout', [CatalogController::class, 'postCheckout']);
//
Route::post('/search-product', [CatalogController::class, 'productSearch']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'getHome'])->name('home');
