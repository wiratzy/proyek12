<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->filter(request([('search')]))->paginate(10)->withQueryString();
        return view('products.index', compact('products'));
    }
    public function showpaginate()
    {
        $products = Product::latest()->filter(request([('search')]))->paginate(10)->withQueryString();
        return view('frontend.index', compact('products'));
    }

}

