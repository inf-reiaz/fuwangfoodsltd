<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    
    protected $table = "employees";
    
    protected $fillable = [
        'id',
        'title',
        'description',
        'deadline',
        'bdjobs',
        'created_at',
        'updated_at'
    ];
    
}
