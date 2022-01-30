<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ProductCategory extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = [
        'name',
        'slug',
        'created_by',
        'updated_by'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['name', 'id']
            ]
        ];
    }

    public function product_product_categories()
    {
        return $this->hasMany('App\Models\ProductProductCategory', 'product_categorie_id');
    }
}
