<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function addToWishlist(Product $product)
    {
        // Check if the user already has the product in the wishlist
        if (!Auth::user()->wishlist->contains('product_id', $product->id)) {
            Wishlist::create([
                'user_id'    => Auth::id(),
                'product_id' => $product->id,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to wishlist.');
    }

    public function index()
    {
        $wishlist = Auth::user()->wishlist()->with('product')->get();


        return view('kategori.index', compact('wishlist'));
    }

    public function removeFromWishlist(Product $product)
    {
        
        
        Auth::user()->wishlist()->where('product_id', $product->id)->delete();

        return redirect()->back()->with('success', 'Product removed from wishlist.');
    }
    

}
