<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $table = 'work';
    protected $fillable = [
        'id',
        'commonId',
        'type_of_work',
        'completed_work_file',
        'about_id'
    ];
}
