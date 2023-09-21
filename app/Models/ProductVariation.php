<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    protected $fillable = [
        'name',
        'price',
        'discount',
        'variation_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function media()
    {
        return $this->hasMany(ProductMedia::class,'variation_id');
    }
}
