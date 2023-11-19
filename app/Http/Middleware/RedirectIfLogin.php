<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfLogin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && $request->is('login')) {
            return redirect('dashboard/dashboardKaryawan'); // Ganti dengan URL halaman yang diinginkan
        }

        return $next($request);
    }
}
