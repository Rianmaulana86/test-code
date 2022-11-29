<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get("/login", [UserController::class, "login"]);
Route::get("/registrasi", [UserController::class, "registrasi"]);
Route::post("/storeAkun", [UserController::class, "storeAkun"]);
Route::post("/log", [UserController::class, "log"]);
Route::post("/logout", [UserController::class, "logout"]);




Route::get("/create", [PostController::class, "create"]);
Route::get("/home", [PostController::class, "home"]);
Route::get("/edit/{post:id}", [PostController::class, "edit"]);
Route::get("/index", [PostController::class, "index"]);
Route::post("/addPost", [PostController::class, "addPost"]);
Route::post("/editPost/{post:id}", [PostController::class, "editPost"]);
Route::post("/delete/{post:id}", [PostController::class, "delete"]);




Route::get("/dashboard", [DashboardController::class, "dashboard"]);
Route::post("/destroy/{post:id}", [DashboardController::class, "destroy"]);