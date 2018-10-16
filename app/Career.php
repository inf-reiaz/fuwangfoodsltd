<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = "careers";
    
    protected $fillable = [
        'id',
        'ctg',
        'title',
        'deadline',
        'description',
        'bd_jobs_link',
        'created_at',
        'updated_at'
    ];
}

