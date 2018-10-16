<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{   
    
    protected $table = "directors";
    
    protected $fillable = [
        'id',
        'ctg',
        'name_title',
        'other',
        'popup',
        'photo',
        'created_at',
        'updated_at'
    ];
    
}
