<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'is_cover_image',
        'image',
        'image_sm',
        'image_md',
        'created_by',
        'updated_by'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
