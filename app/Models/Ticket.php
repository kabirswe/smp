<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'unit_price',
        'quantity',
        'total_price',
        'category_name',
        'created_by',
        'updated_by'
    ];
}
