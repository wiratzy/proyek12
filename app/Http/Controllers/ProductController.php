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

}

