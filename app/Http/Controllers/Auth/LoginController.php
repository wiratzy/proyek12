<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            if ($user->isAdmin()) {
                $user->role = 'admin';
                $user->save(); // Simpan perubahan role ke database
                return view('admin');
            } elseif ($user->isKaryawan()) {
                $user->role = 'karyawan';
                return redirect('dashboard/dashboardKaryawan');
            } else {
                $user->role = 'customer';
                // $user->save(); // Simpan perubahan role ke database
                return redirect('products');
            }
        } else {
            // Login gagal
            return redirect()->back()->withInput()->withErrors(['email' => 'Email atau password salah']);
        }
    }
}
