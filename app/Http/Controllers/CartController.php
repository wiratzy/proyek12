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
        $cek = Cart::where('user_id', Auth::id())->where('product_id', $product->id)->first();
        // if (!Auth::user()->cart->contains('product_id', $product->id)) {
        if ($cek) {
            Cart::where('id', $cek->id)
                ->update([
                    'qty' => $cek->qty + 1,
                ]);
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $product->id,
                'qty' => 1,
                'price' => $product->Price,
            ]);
        }
        // }

        return redirect()->back()->with('success', 'Product added to wishlist.');
    }

    public function index()
    {
        $cart = Cart::where('user_id', Auth::id())->get();

        // $cartp = Auth::user()->cart()->with('product')->get();


        // $cartq = Auth::user()->cart()->with('product')->count();


        // Hitung jumlah total harga dari seluruh produk dalam keranjang
        // $gg = $cart->sum(function ($item) {
        //     return $item->product->Price;
        // });



        // Contoh format data decimal



        return view('cart.index', compact('cart'));
    }

    public function removeFromCart(Product $product)
    {


        Auth::user()->cart()->where('product_id', $product->id)->delete();

        return redirect()->back()->with('success', 'Product removed from wishlist.');
    }


    public function updateCart(Request $request)
    {
        $cartItem = Cart::find($request->cart_id);

        if (!$cartItem) {
            return response()->json(['status' => 'error', 'message' => 'Item not found']);
        }
        // Tambah atau kurangkan qty
        $newQty = $cartItem->qty + 1;
        // Pastikan qty tidak kurang dari 1
        if ($newQty < 1) {
            $newQty = 1;
        }

        $cartItem->update(['qty' => $newQty]);

        return response()->json(['status' => 'success', 'new_qty' => $newQty]);
    }

    public function removeQty(Request $request)
    {
        $cartItem = Cart::find($request->cart_id);

        if (!$cartItem) {
            return response()->json(['status' => 'error', 'message' => 'Item not found']);
        }
        // Tambah atau kurangkan qty
        $newQty = $cartItem->qty - 1;
        // Pastikan qty tidak kurang dari 1
        if ($newQty < 1) {
            $newQty = 1;
        }

        $cartItem->update(['qty' => $newQty]);

        return response()->json(['status' => 'success', 'new_qty' => $newQty]);
    } 
}
