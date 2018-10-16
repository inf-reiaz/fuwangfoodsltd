<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hit extends Model
{
    //hits  
    
    protected $table = "hits";
    
    protected $fillable = [
        'id',
        'view_count',
        'created_at',
        'updated_at'
    ];
    
}
