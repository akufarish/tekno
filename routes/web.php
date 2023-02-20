<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use Illuminate\Auth\Events\Login;

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

Route::get("/register", [RegisterController::class, "index"])->middleware("guest");
Route::post("/register", [RegisterController::class, "store"]);
Route::get("/login", [LoginController::class, "index"])->name("login")->middleware("guest");
Route::post('/login', [LoginController::class, "auth"]);
Route::post('logout', [LoginController::class, "logout"]);
Route::get("/dashboard", [BarangController::class, "index"]);
Route::get("/dashboard/{barang:id}", [BarangController::class, "show"]);
Route::get("/home", [LoginController::class, "sukses"]);
Route::get("/barang", [BarangController::class, "barang"]);
Route::get("/barang/tambah", [BarangController::class, "page"]);
Route::post("/barang/tambah", [BarangController::class, "tambah"]);
Route::get("/barang/hapus/{barang:id}", [BarangController::class, "delete"]);
Route::get("/barang/ubah/{barang:id}", [BarangController::class, "edit"]);
Route::post("/barang/ubah", [BarangController::class, "update"]);

