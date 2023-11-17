<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $customers = Customer::all();
        return view('dashboard.dashboardKaryawan', compact('products', 'customers'));
    }


    public function storeKaryawan()
    {
        
    }
    public function edit()
    {

    }

    public function destroy()
    {

    }
}
