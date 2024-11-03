<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session as FacadesSession;

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

Route::get('/logout', function () {
    FacadesSession::forget('user');
    return redirect('/');
});
Route::view('/login', 'login');
Route::view('/register', 'register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register", [UserController::class, 'register']);
Route::get("/", [ProductController::class, 'index']);
Route::get("detail/{id}", [ProductController::class, 'detail']);
Route::get("search", [ProductController::class, 'search']);
Route::post("add_to_cart", [ProductController::class, 'add']);
Route::get("/cartlist", [ProductController::class, 'cart']);
Route::get("/removeCart/{id}", [ProductController::class, 'remove']);
Route::get("/order", [ProductController::class, 'order']);
Route::post("/orderplace", [ProductController::class, 'orderplace']);
Route::get("/myorders", [ProductController::class, 'myorder']);