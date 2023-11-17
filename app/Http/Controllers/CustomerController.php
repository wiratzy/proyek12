<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('RedirectIfNotKaryawan');
    }
    public function index()
    {
        return view('register');
    }
    public function create()
    {
        return view('customer.create');
    }

    public function storeCustomer(Request $request)
    {
        // Validasi input, simpan data ke basis data, dll.
        // Contoh sederhana:
        Customer::create($request->all());

        return redirect('customer/index');
    }
}
