<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileControllerController;

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

Route::get("/", [ProductController::class, 'index']);
Route::get('/tables', function () {
    return view('pages/tables');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('logout', function () {
    auth()->logout();
    return redirect('/');
})->name('logout');

Route::get('dashboard', [KaryawanController::class, 'index']);
Route::get('dashboard/karyawan', [LoginController::class, 'index']);
Route::get('dashboard/karyawan', [LoginController::class, 'store']);
Route::resource('products', ProductController::class);

