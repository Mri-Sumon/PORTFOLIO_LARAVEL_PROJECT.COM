<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiance extends Model
{
    use HasFactory;

    protected $table = 'experiance';
    protected $fillable = [
        'id',
        'commonId',
        'designation',
        'start_year',
        'end_year',
        'total_experiance',
        'company_name',
        'skill_id',
    ];
}
