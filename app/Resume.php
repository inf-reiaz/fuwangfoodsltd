<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table = "resumes";
    
    protected $fillable = [
        'id',
        'recruitment',
        'name',
        'email',
        'city',
        'mob_number',
        'zip_code',
        'country',
        'cv',
        'created_at',
        'updated_at'
    ];
}
