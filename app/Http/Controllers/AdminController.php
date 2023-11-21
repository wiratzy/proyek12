<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $no = 1;
        $title = "Dashboard Admin";
        $slug = "karyawan";
        $dataKaryawan = User::where('role', 'karyawan')->get();

        return view('admin.karyawan', compact('dataKaryawan', 'no', 'title', 'slug'));
    }
    public function createKaryawan()
    {
        $title = 'Tambah Data Karyawan';
        $slug = 'karyawan';
        $dataKaryawan = User::all();

        return view('admin.createKaryawan', compact('title', 'slug', 'dataKaryawan'));
    }
    public function storeKaryawan(Request $request)
    {
        $result = User::insert([
            'role' => 'karyawan',
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if ($result) {
            return redirect('/dataKaryawan');
        } else {
            return $this->create();
        }
    }

    public function editKaryawan($id)
    {
        $title = 'Perbarui Data Karyawan';
        $slug = 'karyawan';
        $dataKaryawan = User::
            where('id', '=', $id)
            ->first();
        return view('admin.updateKaryawan', compact('title', 'slug', 'dataKaryawan'));
    }
    public function updateKaryawan(Request $request, $id)
    {
        $id = $request->id;
        User::where('id', '=', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        return redirect('/dataKaryawan');
    }
    public function destroyKaryawan( $id)
    {
        User::where('id',$id)
        ->delete();
        
        return redirect('/dataKaryawan');
    }

    public function resetPassword($id)
    {
        User::where('id',$id)
        ->update([
            'password' => bcrypt('12345'),
            ]);
        
        return redirect('/dataKaryawan');
    }
}
