<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bord extends Model
{   
    
    protected $table = "bords";
    
    protected $fillable = [
        'id',
        'name',
        'designation',
        'photo',
        'created_at',
        'updated_at'
    ];
    
    
}
