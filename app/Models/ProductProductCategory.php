<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProductCategory extends Model
{
    use HasFactory;

    protected $table = "product_product_category";
    protected $fillable = [
        'product_id',
        'product_categorie_id'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\ProductCategory', 'product_categorie_id');
    }
}
