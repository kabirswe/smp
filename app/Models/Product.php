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
        return $this->hasMany('App\Models\ProductImage');
    }

    public function productCategory()
    {
        return $this->hasMany('App\Models\ProductProductCategory');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\ProductType', 'product_type_id');
    }
}
