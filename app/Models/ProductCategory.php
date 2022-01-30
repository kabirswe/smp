<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'created_by',
        'updated_by'
    ];

    public function product_product_categories()
    {
        return $this->hasMany('App\Models\ProductProductCategory', 'product_categorie_id');
    }
}
