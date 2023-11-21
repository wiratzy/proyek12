<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfLogin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && $request->is('customer')) {
            return redirect('products.index'); // Ganti dengan URL halaman yang diinginkan
        }elseif (Auth::check() && $request->is('karyawan')) {
            return redirect('karyawan.index'); // Ganti dengan URL halaman yang diinginkan   
        }
        return $next($request);
    }
}
