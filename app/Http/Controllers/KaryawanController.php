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
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }
    public function update(Request $request, $id )
    {
    $customer = Customer::findOrFail($id);
    $customer->update($request->all());

    return redirect('dashboard/dashboardKaryawan');
    }

    public function destroy( $id)
    {
        $customer = Customer::findOrFail($id);
        $customer= $customer->delete();
    return redirect('dashboard/dashboardKaryawan');
    }
}
