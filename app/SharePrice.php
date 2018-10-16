<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SharePrice extends Model
{
        
    protected $table = "share_prices";
    
    protected $fillable = [
        'id',
        'price',
        'product_name',
        'created_at',
        'updated_at'
    ];
}
