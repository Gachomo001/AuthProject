<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Staff extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'dob',
        'gender',
        'phone',
        'email',
        'passport_photo',
        'id_front',
        'id_back',
        'user_role',
        'status',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
