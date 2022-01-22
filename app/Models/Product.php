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
    public function productImages()
    {
        return $this->hasMany('App\Models\ProductImage');
    }

    public function productAllergyIndication()
    {
        return $this->hasMany('App\Models\ProductProductCategory');
    }
}
