<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductMedia extends Model
{
    protected $fillable = [
        'image',
        'product_id',
        'variation_id',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
