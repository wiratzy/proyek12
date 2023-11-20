<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Define a many-to-one relationship with the Product model.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
