<?php

namespace App\Http\Controllers\Auth;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function index()
    {
        $title = "Halaman Login";
        return view('auth/login', compact('title'));
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('LoginError', 'login failed');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            if ($user->isAdmin()) {
                $user->role = 'admin';
                $user->save();
                return redirect('dashboardAdmin');
            } elseif ($user->isKaryawan()) {
                $user->role = 'karyawan';
                $user->save(); // Simpan perubahan role ke database
                // return redirect()->route('dashboard.karyawan');
                // $title = "Dashboard Karyawan";
                // $slug = "dashboard";
                // $products = Product::all();
                return redirect('dashboardKaryawan');
            } else {
                $user->role = 'customer';
                $user->save();
                return redirect('products');
            }
        } else {
            // Login gagal
            return redirect()->back()->withInput()->withErrors(['email' => 'Email atau password salah']);
        }
    }
}
