<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Press extends Model
{
    protected $table = "presses";
    
    protected $fillable = [
        'id',
        'title',
        'slug',
        'description',
        'image',
        'created_at',
        'updated_at'
    ];
}
