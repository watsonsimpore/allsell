<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Les Categories

Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::put('/category/{category_id}/{scategory_id?}', [CategoryController::class, 'update']);
Route::delete('/delete/category/{id}', [CategoryController::class, 'destroyCategory']);
Route::delete('/delete/subcategory/{id}', [CategoryController::class, 'destroySubCategory']);


// Les Produits

Route::get('/products', [ProductController::class, 'index']);
Route::post('/store/product', [ProductController::class, 'store']);
Route::get('/show/product/{id}', [ProductController::class, 'show']);
Route::get('/product/show_by/slug/{slug}', [ProductController::class, 'showBySlug']);
Route::get('/product/show_by/category/{category_id}', [ProductController::class, 'showByCategory_ID']);
Route::get('/product/show_by/popular_products', [ProductController::class, 'popular_products']);
Route::get('/product/show_by/sale_products', [ProductController::class, 'sale_products']); //Produit en Promo
Route::get('/product/show_by/lasted_products', [ProductController::class, 'lasted_products']); //Produits Recents


//Shopping Cart

Route::get('/carts', [ShoppingCartController::class, 'index']);
Route::post('/cart', [ShoppingCartController::class, 'store']);

