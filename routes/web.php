<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingListController;
use App\Http\Controllers\RecipeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
//Route::resource('lists', ShoppingListController::class);
Route::get('lists', [ShoppingListController::class, 'index']);
Route::resource('recipes', RecipeController::class);


//Route::resource('userFavourites', [RecipeController::class, 'show']);
Route::get('/userFavourites', [RecipeController::class, 'show']);


