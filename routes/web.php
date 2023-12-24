<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\WishlistController;
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

Route::get('/', [FrontendController::class, 'index'])->middleware('guest');
Route::get('/', [ProductController::class, 'showpaginate'])->middleware('guest');


Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::get('login', [KaryawanController::class, 'index'])->name('index')->middleware('RedirecIfNotKaryawan');
// Route::post('login', [LoginController::class, 'authenticate'])->middleware('auth');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('storeCustomer', [RegisterController::class, 'storeCustomer'])->name('storeCustomer');

Route::get('frontend/index', [CustomerController::class, 'index']);


Route::post('logout', function () {
    auth()->logout();
    return redirect('login');
})->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::post('/wishlist/add/{product}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
    Route::delete('/wishlist/remove/{product}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');
    Route::get('/products/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::get('/products/showAll', [CategoryController::class, 'showAll']);
    Route::get('/products/haircare', [CategoryController::class, 'haircare']);
    Route::get('/products/showAll', [CategoryController::class, 'showAll']);
    Route::get('/products/showAll', [CategoryController::class, 'showAll']);
    Route::get('/products/showAll', [CategoryController::class, 'showAll']);
    Route::get('/products/showAll', [CategoryController::class, 'showAll']);
    Route::get('/products/showAll', [CategoryController::class, 'showAll']);
    // Tambahkan rute lainnya sesuai kebutuhan
});

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
Route::resource('products', ProductController::class)->middleware('RedirectIfNotCustomer');
// Route::resource('register', CustomerController::class);

Route::get('customer/create', [CustomerController::class, 'create'])->name('customer.create');


//Dashboard Admin
Route::get('dashboardAdmin', [AdminController::class, 'index'])->middleware('auth')->middleware('RedirectIfNotAdmin');
Route::get('dashboardAdmin', [AdminController::class, 'show'])->middleware('auth')->middleware('RedirectIfNotAdmin');

Route::get('/dataKaryawan', [AdminController::class, 'dataKaryawan'])->middleware('auth')->middleware('RedirectIfNotAdmin');
Route::post('/dataKaryawan/storeKaryawan', [AdminController::class, 'storeKaryawan'])->middleware('RedirectIfNotAdmin');
Route::get('/dataKaryawan/createKaryawan', [AdminController::class, 'createKaryawan'])->middleware('auth')->middleware('RedirectIfNotAdmin');
Route::get('dataKaryawan/editKaryawan/{id}', [AdminController::class, 'editKaryawan'])->middleware('RedirectIfNotAdmin');
Route::post('/dataKaryawan/updateKaryawan/{id}', [AdminController::class, 'updateKaryawan'])->middleware('RedirectIfNotAdmin');
Route::get('/dataKaryawan/destroyKaryawan/{id}', [AdminController::class, 'destroyKaryawan'])->middleware('auth')->middleware('RedirectIfNotAdmin');
Route::get('/dataKaryawan/resetPassword/{id}', [AdminController::class, 'ResetPassword'])->middleware('auth')->middleware('RedirectIfNotAdmin');


Route::get('/dataCustomerAdm', [AdminController::class, 'dataCust'])->middleware('auth')->middleware('RedirectIfNotAdmin');
Route::post('/dataCustomerAdm/storeCust', [AdminController::class, 'storeCust'])->middleware('RedirectIfNotAdmin');
Route::get('/dataCustomerAdm/createCust', [AdminController::class, 'createCust'])->middleware('auth')->middleware('RedirectIfNotAdmin');
Route::post('/dataCustomerAdm/updateCust/{id}', [AdminController::class, 'updateCust'])->middleware('RedirectIfNotAdmin');
Route::get('/dataCustomerAdm/editCust/{id}', [AdminController::class, 'editCust'])->middleware('auth')->middleware('RedirectIfNotAdmin');
Route::get('/dataCustomerAdm/destroyCust/{id}', [AdminController::class, 'destroyCust'])->middleware('auth')->middleware('RedirectIfNotAdmin');


Route::get('dataProdukAdm', [AdminController::class, 'dataProduk'])->middleware('auth')->middleware('RedirectIfNotAdmin');
Route::post('dataProdukAdm/storeProduk', [AdminController::class, 'storeProduk'])->middleware('RedirectIfNotAdmin');
Route::post('dataProdukAdm/updateProduk/{id}', [AdminController::class, 'updateProduk'])->middleware('RedirectIfNotAdmin');
Route::get('dataProdukAdm/editProduk/{id}', [AdminController::class, 'editProduk'])->middleware('auth')->middleware('RedirectIfNotAdmin');
Route::get('dataProdukAdm/destroyProduk/{id}', [AdminController::class, 'destroyProduk'])->middleware('auth')->middleware('RedirectIfNotAdmin');




                            // KARYAWAN DATA TABLE CUSTOMER
                            Route::get('dashboardKaryawan', [KaryawanController::class, 'index'])->middleware('auth')->middleware('RedirectIfNotKaryawan');
                            Route::get('dashboardKaryawan', [KaryawanController::class, 'show'])->middleware('auth')->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataCustomer', [KaryawanController::class, 'dataCust'])->middleware('RedirectIfNotKaryawan');
                            Route::post('/dataCustomer/storeCust', [KaryawanController::class, 'storeCust'])->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataCustomer/createCust', [KaryawanController::class, 'createCust'])->middleware('RedirectIfNotKaryawan');
                            Route::post('/dataCustomer/updateCust/{id}', [KaryawanController::class, 'updateCust'])->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataCustomer/editCust/{id}', [KaryawanController::class, 'editCust'])->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataCustomer/destroyCust/{id}', [KaryawanController::class, 'destroyCust'])->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataCustomer/resetPassword/{id}', [KaryawanController::class, 'resetPassword'])->middleware('RedirectIfNotKaryawan');
                            
                            // KARYAWAN DATA TABLE PRODUK
                            Route::get('dataProduk', [KaryawanController::class, 'dataProduk'])->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataProduk/createProduk', [KaryawanController::class, 'createProduk'])->middleware('RedirectIfNotKaryawan');
                            Route::post('/dataProduk/storeProduk', [KaryawanController::class, 'storeProduk'])->name('products.store')->middleware('RedirectIfNotKaryawan');
                            Route::post('/dataProduk/updateProduk/{id}', [KaryawanController::class, 'updateProduk'])->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataProduk/editProduk/{id}', [KaryawanController::class, 'editProduk'])->middleware('RedirectIfNotKaryawan');
                            Route::get('/dataProduk/destroyProduk/{id}', [KaryawanController::class, 'destroyProduk'])->middleware('RedirectIfNotKaryawan');

                            // KARYAWAN DATA TABLE PROFIL
                            Route::get('profil', [KaryawanController::class, 'profil'])->middleware('RedirectIfNotKaryawan');
                            //Route::post('/dataKaryawan/storeProfil', [KaryawanController::class, 'storeProfil'])->middleware('RedirectIfNotKaryawan');
                            Route::post('/dataKaryawan/updateProfil/{id}', [KaryawanController::class, 'updateProfil'])->middleware('RedirectIfNotKaryawan')->name('update.profile');
                            Route::get('/dataKaryawan/editProfil/{id}', [KaryawanController::class, 'editProfil'])->middleware('RedirectIfNotKaryawan');