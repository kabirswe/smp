<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'name',
        'product_type_id',
        'quantity',
        'description',
        'created_by',
        'updated_by'
    ];

    //Prdouct Iamges table  relation for product id
    public function images()
    {
        return $this->hasMany('App\Models\ProductImage', 'product_id');
    }

    public function product_product_categories()
    {
        return $this->hasMany('App\Models\ProductProductCategory', 'product_id');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\ProductType', 'product_type_id');
    }
}
