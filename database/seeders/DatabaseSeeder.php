<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Karyawan;
use App\Models\Product;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // $this->call([
        //     ProductSeeder::class,
        // ]);
        User::create([
            'name' => 'wira',
            'email' => 'wiranto@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        User::create([
            'name' => 'riski',
            'email' => 'riski@gmail.com',
            'role' => 'karyawan',
            'password' => bcrypt('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        User::create([
            'name' => 'niken',
            'email' => 'niken@gmail.com',
            'role' => 'customer',
            'password' => bcrypt('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([
            'id' => '2',
            'Name' => 'sampo',
            'ProductCode' => '002',
            'Description' => 'sampo Impor Terpercaya',
            'Price' => 5000,
            'Stock' => 2,
            'ImageURL' => 'unsplash.com'

        ]);
        // Product::create([
        //     'ProductID' => '3',
        //     'Name' => 'Pastagigi',
        //     'ProductCode' => '003',
        //     'Description' => 'Pastagigi Impor Terpercaya',
        //     'Price' => 1500,
        //     'Stock' => 3,
        //     'ImageURL' => 'unsplash.com'

        // ]);
        // Product::create([
        //     'ProductID' => '1',
        //     'Name' => 'Sabun',
        //     'ProductCode' => '001',
        //     'Description' => 'Sabun Impor Terpercaya',
        //     'Price' => 15000,
        //     'Stock' => 2,
        //     'ImageURL' => 'unsplash.com'

        // ]);

        // Customer::create([
        //     'CustomerID' => '1',
        //     'nama' => 'riyan',
        //     'nomor_hp' => '0893531342',
        //     'alamat' => 'imkot',
        //     'email' => 'rian@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        }
}
