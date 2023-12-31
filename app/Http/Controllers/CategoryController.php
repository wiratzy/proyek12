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

    public function bodycare()
    {
    $products = Product::where('ProductCode','=','bodycare')->get();
        return view('kategori.bodycare', compact('products'));
    }

    public function aksesoris()
    {
    $products = Product::where('ProductCode','=','aksesoris')->get();
        return view('kategori.aksesoris', compact('products'));
    }

    public function skincare()
    {
    $products = Product::where('ProductCode','=','skincare')->get();
        return view('kategori.skincare', compact('products'));
    }

    public function parfum()
    {
    $products = Product::where('ProductCode','=','parfum')->get();
        return view('kategori.parfum', compact('products'));
    }

    public function makeup()
    {
    $products = Product::where('ProductCode','=','makeup')->get();
        return view('kategori.makeup', compact('products'));
    }

}
