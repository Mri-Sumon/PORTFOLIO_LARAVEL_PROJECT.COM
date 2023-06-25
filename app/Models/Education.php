<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'education';
    protected $fillable = [
        'id',
        'commonId',
        'work_id',
        'degree',
        'start_year',
        'end_year',
        'institute_name',
        'work_id'
    ];
}
