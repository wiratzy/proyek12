<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [FrontendController::class, 'index']);


Route::get('login', [LoginController::class, 'index'])->name('login');
// Route::get('login', [KaryawanController::class, 'index'])->name('index')->middleware('RedirecIfNotKaryawan');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('storeCustomer', [RegisterController::class, 'storeCustomer'])->name('storeCustomer');

Route::get('frontend/index', [CustomerController::class, 'index']);


Route::post('logout', function () {
    auth()->logout();
    return redirect('login');
})->name('logout');

// Route::get('dashboard/dashboardKaryawan', [KaryawanController::class, 'index'])->middleware('RedirectIfNotKaryawan');
// Route::get('login', [LoginController::class, 'index']);
// Route::post('dashboard/dashboardKaryawan', [LoginController::class, 'store']);
// Route::get('customer/index', function(){
//     $customers = Customer::all();
//     return view('customer.index',compact('customers'));
// });
// Route::get('dashboard/dashboardKaryawan', [KaryawanController::class, 'index'] );
// Route::get('customer.edit', [KaryawanController::class,'edit']);
// Route::get('customer/{$id}/edit', [KaryawanController::class, 'edit']);
// Route::post('customer/{$id}/edit', [KaryawanController::class, 'update']);
// Route::resource('customer', KaryawanController::class);
Route::resource('products', ProductController::class);
// Route::resource('register', CustomerController::class);

Route::get('customer/create', [CustomerController::class, 'create'])->name('customer.create');


//Dashboard Admin
Route::get('/dataKaryawan', [AdminController::class, 'index'])->middleware('RedirectIfNotAdmin');
Route::get('/dataKaryawan', [AdminController::class, 'show'])->middleware('RedirectIfNotAdmin');
Route::post('/dataKaryawan/storeKaryawan', [AdminController::class, 'storeKaryawan'])->middleware('RedirectIfNotAdmin');
Route::get('/dataKaryawan/createKaryawan', [AdminController::class, 'createKaryawan'])->middleware('RedirectIfNotAdmin');
Route::get('dataKaryawan/editKaryawan/{id}', [AdminController::class, 'editKaryawan'])->middleware('RedirectIfNotAdmin');
Route::post('/dataKaryawan/updateKaryawan/{id}', [AdminController::class, 'updateKaryawan'])->middleware('RedirectIfNotAdmin');
Route::post('/dataKaryawan/destroyKaryawan/{id}', [AdminController::class, 'destroyKaryawan'])->middleware('RedirectIfNotAdmin');
Route::get('/dataKaryawan/resetPassword/{id}', [AdminController::class, 'ResetPassword'])->middleware('RedirectIfNotAdmin');

                            // KARYAWAN DATA TABLE CUSTOMER
                            Route::get('dashboard', [KaryawanController::class, 'index'])->middleware('RedirectIfNotKaryawan');
                            Route::get('dashboard', [KaryawanController::class, 'show'])->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataCustomer', [KaryawanController::class, 'dataCust'])->middleware('RedirectIfNotKaryawan');
                            Route::post('/dataCustomer/storeCust', [KaryawanController::class, 'storeCust'])->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataCustomer/createCust', [KaryawanController::class, 'createCust'])->middleware('RedirectIfNotKaryawan');
                            Route::post('/dataCustomer/updateCust/{id}', [KaryawanController::class, 'updateCust'])->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataCustomer/editCust/{id}', [KaryawanController::class, 'editCust'])->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataCustomer/destroyCust/{id}', [KaryawanController::class, 'destroyCust'])->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataCustomer/resetPassword/{id}', [KaryawanController::class, 'resetPassword'])->middleware('RedirectIfNotKaryawan');
                            
                            
                            Route::get('dataProduk', [KaryawanController::class, 'dataProduk'])->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataProduk/createProduk', [KaryawanController::class, 'createProduk'])->middleware('RedirectIfNotKaryawan');
                            Route::post('/dataProduk/storeProduk', [KaryawanController::class, 'storeProduk'])->name('products.store')->middleware('RedirectIfNotKaryawan');
                            Route::post('/dataProduk/updateProduk/{id}', [KaryawanController::class, 'updateProduk'])->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataProduk/editProduk/{id}', [KaryawanController::class, 'editProduk'])->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataProduk/destroyProduk/{id}', [KaryawanController::class, 'destroyProduk'])->middleware('RedirectIfNotKaryawan');