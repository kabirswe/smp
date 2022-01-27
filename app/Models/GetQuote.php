<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetQuote extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'mobile_number',
        'company_name',
        'company_ein',     
        'website',     
        'radio_one',     
        'radio_two',     
        'product_quantity',     
        'serving',     
        'budget',     
        'delivery_period',     
        'radio_three',     
        'packaging',   
        'desired_label',   
        'radio_four',   
        'storage_fulfillment',     
        'text_box',   
    ];
}
