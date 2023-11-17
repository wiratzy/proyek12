<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Product;
use App\Models\Customer;
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
    return redirect('login');
})->name('logout');

Route::get('dashboard/dashboardKaryawan', [KaryawanController::class, 'index']);
Route::post('dashboard/dashboardKaryawan', [KaryawanController::class, 'storeKaryawan']);
// Route::get('login', [LoginController::class, 'index']);
Route::post('dashboard/dashboardKaryawan', [LoginController::class, 'store']);
Route::get('customer/index', function(){
    $customers = Customer::all();
    return view('customer.index',compact('customers'));
});
Route::get('customerEdit', [KaryawanController::class, 'edit'] )->name('customer.edit');
Route::get('customerDestroy', [KaryawanController::class, 'destroy'] )->name('customer.destroy');
Route::resource('products', ProductController::class);
// Route::resource('register', CustomerController::class);
Route::get('register', [CustomerController::class, 'index']);
Route::get('registerCustomer', [CustomerController::class, 'create']);
Route::post('storeCustomer', [CustomerController::class, 'storeCustomer'])->name('register.storeCustomer');