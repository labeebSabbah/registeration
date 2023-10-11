<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;

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

Route::get('/', [OrderController::class, "create"])->name("home");
Route::post("/store", [OrderController::class, "store"])->name("store");
Route::post("/show", [OrderController::class, "show"])->name("show");
Route::get("/search", [OrderController::class, "search"])->name("search");
Route::get("/admin", [OrderController::class, "index"])->name("admin");
Route::put("/update/{id}", [OrderController::class, "update"])->name("update");
