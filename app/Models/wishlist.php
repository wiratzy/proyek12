<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    protected $fillable = ['user_id', 'product_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'wishlists';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    // Nama tabel di database

    // Relasi dengan model Product
    
}
