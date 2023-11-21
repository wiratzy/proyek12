<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

 
    public function index()
    {
        $products = Product::latest()->filter(request([('search')]))->paginate(2)->withQueryString();
        return view('frontend/index', compact('products'));
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

        return redirect('products');
    }
}
