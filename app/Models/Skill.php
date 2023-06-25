<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $table = 'skill';
    protected $fillable = [
        'id',
        'commonId',
        'skills',
        'skillsLevel',
        'education_id'
    ];
}
