<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->filter(request([('search')]))->paginate(2)->withQueryString();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validasi input, simpan data ke basis data, dll.
        // Contoh sederhana:
        Product::create($request->all());

        return redirect()->route('products.index');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.index', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input, update data di basis data, dll.
        // Contoh sederhana:
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        // Hapus data dari basis data
        $product = Product::findOrFail($id);
        $product = $product->delete();

        return redirect()->route('products.index', $id);
    }
}

