<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    
    protected $fillable = [
        'id',
        'cat_name',
        'product_name',
        'slug',
        'product_description',
        'product_image',
        'sku',
        'pkt',
        'ctn',
        'mrp',
        'created_at',
        'updated_at'
    ];
    
}
