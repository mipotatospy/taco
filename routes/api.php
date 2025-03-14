<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ShoppingListController;
use App\Http\Controllers\Api\RecipeController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\FavouriteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/signup', [UserController::class, 'store']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

Route::apiResource('/shoppingLists', ShoppingListController::class)->middleware('auth:sanctum');
Route::apiResource('/recipes', RecipeController::class)->middleware('auth:sanctum');
Route::apiResource('/products', ProductController::class);
Route::apiResource('/categories', CategoryController::class);
Route::apiResource('/favourites', FavouriteController::class)->middleware('auth:sanctum');
