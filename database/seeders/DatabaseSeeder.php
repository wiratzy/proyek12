<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Karyawan;
use App\Models\Product;
use App\Models\User;
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
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'riski',
            'email' => 'riski@gmail.com',
            'role' => 'karyawan',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'niken',
            'email' => 'niken@gmail.com',
            'role' => 'customer',
            'password' => bcrypt('12345')
        ]);

        Product::create([
            'ProductID' => '1',
            'Name' => 'Sabun',
            'ProductCode' => '001',
            'Description' => 'Sabun Impor Terpercaya',
            'Price' => 15000,
            'Stock' => 2,
            'ImageURL' => 'unsplash.com'

        ]);
        }
}
