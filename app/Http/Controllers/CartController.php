<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Product $product)
    {
    if (!Auth::user()->cart->contains('product_id', $product->id)) {
        Cart::create([
            'user_id'    => Auth::id(),
            'product_id' => $product->id,
        ]);
    }

    return redirect()->back()->with('success', 'Product added to wishlist.');
}

public function index()
{
    $cart = Auth::user()->cart()->with('product')->get();
    $cartq = Auth::user()->cart()->with('product')->count();


    return view('cart.index', compact('cart','cartq'));
}

public function removeFromCart(Product $product)
{
    
    
    Auth::user()->cart()->where('product_id', $product->id)->delete();

    return redirect()->back()->with('success', 'Product removed from wishlist.');
}

 
}
