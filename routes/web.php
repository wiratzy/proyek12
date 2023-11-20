<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
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

Route::get('/', [HomeController::class, 'index']);


Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('RedirectIfLogin');
// Route::get('login', [KaryawanController::class, 'index'])->name('index')->middleware('RedirecIfNotKaryawan');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('storeCustomer', [RegisterController::class, 'storeCustomer'])->name('storeCustomer');





Route::post('logout', function () {
    auth()->logout();
    return redirect('login');
})->name('logout');

Route::get('dashboard/dashboardKaryawan', [KaryawanController::class, 'index'])->middleware('RedirectIfNotKaryawan');
// Route::get('login', [LoginController::class, 'index']);
Route::post('dashboard/dashboardKaryawan', [LoginController::class, 'store']);
Route::get('customer/index', function(){
    $customers = Customer::all();
    return view('customer.index',compact('customers'));
});
// Route::get('dashboard/dashboardKaryawan', [KaryawanController::class, 'index'] );
// Route::get('customer.edit', [KaryawanController::class,'edit']);
// Route::get('customer/{$id}/edit', [KaryawanController::class, 'edit']);
// Route::post('customer/{$id}/edit', [KaryawanController::class, 'update']);
Route::resource('customer', KaryawanController::class);
Route::resource('products', ProductController::class);
// Route::resource('register', CustomerController::class);

Route::get('customer/create', [CustomerController::class, 'create'])->name('customer.create');


                            // KARYAWAN DATA TABLE CUSTOMER
                            Route::get('dashboard', [KaryawanController::class, 'index']);
                            Route::get('/dataCustomer', [KaryawanController::class, 'dataCust']);
                            Route::post('/dataCustomer/storeCust', [KaryawanController::class, 'storeCust']);
                            Route::get('/dataCustomer/createCust', [KaryawanController::class, 'createCust']);
                            Route::post('/dataCustomer/updateCust/{id}', [KaryawanController::class, 'updateCust']);
                            Route::get('/dataCustomer/editCust/{id}', [KaryawanController::class, 'editCust']);
                            Route::get('/dataCustomer/destroyCust/{id}', [KaryawanController::class, 'destroyCust']);
                            Route::get('/dataCustomer/resetPassword/{id}', [KaryawanController::class, 'resetPassword']);
                            
                            Route::post('/uploadImage', 'ImageController@uploadImage')->name('uploadImage');
                            
                            Route::get('dataProduk', [KaryawanController::class, 'dataProduk']);
                            Route::get('/dataProduk/createProduk', [KaryawanController::class, 'createProduk']);
                            Route::post('/dataProduk/storeProduk', [KaryawanController::class, 'storeProduk'])->name('products.store');
                            Route::post('/dataProduk/updateProduk/{id}', [KaryawanController::class, 'updateProduk']);
                            Route::get('/dataProduk/editProduk/{id}', [KaryawanController::class, 'editProduk']);
                            Route::get('/dataProduk/destroyProduk/{id}', [KaryawanController::class, 'destroyProduk']);