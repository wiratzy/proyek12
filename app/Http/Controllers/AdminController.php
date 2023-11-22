<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $title = "Dashboard Admin";
        $slug = "admin";
        return view('admin/index', compact('title', 'slug'));
    }
    public function show()
    {
        $dataKaryawan = User::where('role', '=', 'karyawan')
            ->count();
        $dataCustomer = User::where('role', '=', 'customer')
            ->count();
        $title = "Dashboard Admin";
        $slug = "admin";
        return view('admin/index', compact('dataKaryawan', 'dataCustomer', 'title', 'slug'));
    }

    public function dataKaryawan()
    {
        $no = 1;
        $title = "Dashboard Admin";
        // $jumlahKaryawan = User::where('role','=','customer')
        $slug = "datakaryawan";
        $dataKaryawan = User::where('role', 'karyawan')->get();
        return view('admin/karyawan', compact('dataKaryawan', 'no', 'title', 'slug'));
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
            'password' => bcrypt($request->password),
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
    public function destroyKaryawan($id)
    {
        User::where('id', $id)
            ->delete();

        return redirect('/dataKaryawan');
    }

    public function resetPassword($id)
    {
        User::where('id', $id)
            ->update([
                'password' => bcrypt('12345'),
            ]);

        return redirect('/dataKaryawan');
    }
    public function dataCust()
    {
        $title = "Data Customer";
        $slug = "customer";
        $no = 1;
        $dataCust = User::where("role", "customer")->get();


        return view("admin.customer", compact("title", "slug", "dataCust", "no"));
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
            return redirect('/dataCustomerAdm');
        } else {
            return $this->create();
        }
    }
    public function createCust()
    {
        $title = 'Tambah Data Customer';
        $slug = 'customer';
        $dataCust = User::all();

        return view('admin.createcust', compact('title', 'slug', 'dataCust'));
    }
    public function editCust($id)
    {
        $title = 'Perbarui Data Customer';
        $slug = 'customer';
        $dataCust = User::
            where('id', '=', $id)
            ->first();

        return view('admin.update', compact('title', 'slug', 'dataCust'));
    }
    public function updateCust(Request $request, $id)
    {
        $id = $request->id;
        User::where('id', '=', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,

            ]);
        return redirect('/dataCustomerAdm');
    }


    public function destroyCust($id)
    {
        User::where('id', $id)
            ->delete();

        return redirect('/dataCustomerAdm');
    }

    public function dataProduk()
    {
        $title = "Data Produk";
        $slug = "produk";
        $no = 1;
        $dataProduk = Product::all();

        return view('admin.produk', compact("title", "slug", "dataProduk", "no"));
    }
    public function createProduk()
    {
        return view('admin.createprod');
    }


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

            // dd($path);
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
        return redirect('/dataProdukAdm');

    }

    public function editProduk($id)
    {
        $title = 'Perbarui Data Produk';
        $slug = 'produk';
        $dataProduk = Product::
            where('ProductID', '=', $id)
            ->first();

        return view('admin.updateProduk', compact('title', 'slug', 'dataProduk', ));


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
        return redirect('/dataProdukAdm');
    }


    public function destroyProduk($id)
    {
        Product::where('ProductID', $id)
            ->delete();

        return redirect('/dataProdukAdm');
    }

}
