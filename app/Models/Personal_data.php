<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal_data extends Model
{
    use HasFactory;

    protected $table = 'personal_data';
    protected $fillable = [
        'id',
        'commonId',
        'father_name',
        'mother_name',
        'permanent_address',
        'height',
        'sex',
        'blood_group',
        'marital_status',
        'religion',
        'nid_number',
        'nationality',
        'signature',
        'experiance_id',
    ];
}
