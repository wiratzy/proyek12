<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $title = "Dashboard Karyawan";
        $slug = "dashboard";
        return view('karyawan.index', compact('products', 'title', 'slug'));
    }


    public function storeKaryawan()
    {

    }


    //MENAMPILKAN DATA DARI DATABASE TABEL USER
    public function dataCust()
    {
        $title = "Data Customer";
        $slug = "customer";
        $no = 1;
        $dataCust = User::where("role", "customer")->get();


        return view("karyawan.customer", compact("title", "slug", "dataCust", "no"));
    }


    public function createCust()
    {
        $title = 'Tambah Data Customer';
        $slug = 'customer';
        $dataCust = User::all();

        return view('karyawan.createcust', compact('title', 'slug', 'dataCust'));
    }

    public function storeCust(Request $request)
    {
        $result = User::insert([
            'role' => 'customer',
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if ($result) {
            return redirect('/dataCustomer');
        } else {
            return $this->create();
        }
    }


    // EDIT DATA CUSTOMER
    public function editCust($id)
    {
        $title = 'Perbarui Data Customer';
        $slug = 'customer';
        $dataCust = User::
            where('id', '=', $id)
            ->first();

        return view('karyawan.update', compact('title', 'slug', 'dataCust'));
    }

    public function updateCust(Request $request, $id)
    {
        $id = $request->id;
        User::where('id', '=', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,

            ]);
        return redirect('/dataCustomer');
    }


    public function destroyCust($id)
    {
        User::where('id', $id)
            ->delete();

        return redirect('/dataCustomer');
    }

    public function resetPassword($id)
    {
        User::where('id', $id)
            ->update([
                'password' => bcrypt('12345'),
            ]);

        return redirect('/dataCustomer');
    }

    //              PRODUK


    public function dataProduk()
    {
        $title = "Data Produk";
        $slug = "produk";
        $no = 1;
        $dataProduk = Product::all();


        return view('karyawan.produk', compact("title", "slug", "dataProduk", "no"));
    }
    public function createProduk()
    {
        return view('karyawan.createprod');
    }

    // public function storeProduk(Request $request)
    // {

    //     $gambar_nama = $_FILES['ImageURL']['name'];
    //     $gambar_temp = $_FILES['ImageURL']['tmp_name'];
    //     $result = Product::insert([
    //         'Name' => $request->Name,
    //         'Description' => $request->Description,
    //         'Price' => $request->Price,
    //         'Stock' => $request->Stock,
    //         'ProductCode' => $request->ProductCode,
    //         'ImageURL' => $request->ImageURL,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);
    //     if($result){
    //         move_uploaded_file($gambar_temp, " {{ assets('storage/images/') }}" . $gambar_nama);
    //         return redirect('/dataProduk');
    //     }else{
    //         return $this->createProduk();
    //     }


    // }
    // public function storeProduk(Request $request)
    // {
    //     $gambar_nama = $request->file('ImageURL')->getClientOriginalName();

    //     $result = Product::create([
    //         'Name' => $request->Name,
    //         'Description' => $request->Description,
    //         'Price' => $request->Price,
    //         'Stock' => $request->Stock,
    //         'ProductCode' => $request->ProductCode,
    //         'ImageURL' => $gambar_nama, // Save the file name, not the file itself
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);

    //     if ($result) {
    //         $request->file('ImageURL')->storeAs('images', $gambar_nama, 'public'); // Save the file in the public disk under the 'images' directory
    //         return redirect('/dataProduk');
    //     } else {
    //         return $this->createProduk();
    //     }
    // }

    public function storeProduk(Request $request)
    {
        // Step 1: Validate the request
        $request->validate([
            'Name' => 'required|string',
            'Description' => 'required|string',
            'Price' => 'required|numeric',
            'Stock' => 'required|integer',
            'ProductCode' => 'required|string',
            'ImageURL' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $path = null;


        // Step 2: Check if the file exists in the request
        if ($request->hasFile('ImageURL')) {
            // Step 3: Get the original file name
            // Step 6: Store the image file
            $path = $request->file('ImageURL')->store('images');

            // dd($);
            // Step 7: Redirect on success
        } else {
            // Handle the case where the file doesn't exist in the request
            return response()->json(['error' => 'Image file is required.'], 400);
        }

        $result = Product::create([
            'Name' => $request->Name,
            'Description' => $request->Description,
            'Price' => $request->Price,
            'Stock' => $request->Stock,
            'ProductCode' => $request->ProductCode,
            'ImageURL' => $path,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/dataProduk');

    }

    public function editProduk($id)
    {
        $title = 'Perbarui Data Produk';
        $slug = 'produk';
        $dataProduk = Product::
            where('ProductID', '=', $id)
            ->first();

        return view('karyawan.updateproduk', compact('title', 'slug', 'dataProduk'));
    }

    public function updateProduk(Request $request, $id)
    {
        $id = $request->id;
        Product::where('ProductID', '=', $id)
            ->update([
                'Name' => $request->Name,
                'Description' => $request->Description,
                'Price' => $request->Price,
                'Stock' => $request->Stock,
                'ProductCode' => $request->ProductCode,

            ]);
        return redirect('/dataProduk');
    }


    public function destroyProduk($id)
    {
        Product::where('ProductID', $id)
            ->delete();

        return redirect('/dataProduk');
    }

}
