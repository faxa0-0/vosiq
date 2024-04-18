<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $fillable=[
        'child_FIO',
        'child_id_number',
        'date_of_birth',
        'date_of_enrollment',
        'address',
        'mother_FIO',
        'mother_phone_number',
        'mother_passport_series',
        'father_FIO',
        'father_phone_number',
        'father_passport_series',
        'home_phone_number',
        'email',
        'photo',
        'added_by'
    ];
    
}
