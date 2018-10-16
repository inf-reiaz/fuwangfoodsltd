<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    protected $table = "financials";
    
    protected $fillable = [
        'id',
        'title',
        'first',
        'first_pdf',
        'half',
        'half_pdf',
        'third',
        'third_pdf',
        'anual_report',
        'anual_report_pdf',
        'created_at',
        'updated_at'
    ];
}
