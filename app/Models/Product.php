<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $primaryKey = "id";
    protected $fillable = ['Name', 'ProductCode', 'Description', 'Price', 'Stock', 'ImageURL'];
    public $incrementing = false;


    // Tentukan tipe data kolom ID
    protected $keyType = 'string';

    public function scopeFilter($query, array $filters)
    {


        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('Name', 'like', '%' . $search . '%')
                ->orWhere('Description', 'like', '%' . $search . '%');
        });
    }


    public function category()
    {
        // Relasi Many-to-One (inverse dari One-to-Many)
        return $this->belongsTo(Category::class, 'CategoryID');
    }


    public function wishlists()
    {
        return $this->hasMany(Wishlist::class, 'product_id');
    }

    public function isInWishlist()
    {
        // Check if the product is in the current user's wishlist
        if (auth()->check()) {
            return auth()->user()->wishlist->contains('product_id', $this->id);
        }

        return false;
    }

}
