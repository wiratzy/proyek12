<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'cart';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function price()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
