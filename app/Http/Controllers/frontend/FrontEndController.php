<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::latest()->filter(request([('search')]))->paginate(2)->withQueryString();
        return view('frontend.index', compact('products'));
    }

    public function depan()
    {
        
    }
}
