<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $primaryKey = "ProductID";
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


}
