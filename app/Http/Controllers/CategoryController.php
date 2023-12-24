<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showAll()
    {
    $products = Product::latest()->get();
        return view('kategori.showAll', compact('products'));
    }

    public function haircare()
    {
    $products = Product::where('ProductCode','=','haircare')->get();
        return view('kategori.haircare', compact('products'));
    }
}
