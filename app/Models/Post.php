<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'post_category_id',
        'cover_image',
        'cover_image_sm',
        'cover_image_md',
        'description',
        'created_by',
        'updated_by'
    ];
}
