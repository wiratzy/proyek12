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
                $title = "Dashboard Admin";
                $slug = "dashboard";
                return view('admin.index', compact('title', 'slug'));
            } elseif ($user->isKaryawan()) {
                $user->role = 'karyawan';
                $user->save(); // Simpan perubahan role ke database
                // return redirect()->route('dashboard.karyawan');
                // $title = "Dashboard Karyawan";
                // $slug = "dashboard";
                // $products = Product::all();
                return redirect('dashboard');
            } else {
                $user->role = 'customer';
                $user->save();
                return redirect('frontend/index');
            }
        } else {
            // Login gagal
            return redirect()->back()->withInput()->withErrors(['email' => 'Email atau password salah']);
        }
    }
}
