<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $table = 'socialmedia';
    protected $fillable = [
        'id',
        'commonId',
        'skype',
        'facebook',
        'linkedin',
        'instagram',
        'twitter',
        'personal_data_id',
    ];
}
