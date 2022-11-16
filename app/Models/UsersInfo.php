<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersInfo extends Model
{
    use HasFactory;

    protected $table = 'user_infos';

    protected $fillable = [
        'name',
        'nickname',
        'image',
        'email',
        'nid',
        'phone',
        'gender',
        'department',
        'hall',
        'bloodgroup',
        'birthdate',
        'district',
        'address',
        'subscription',
        'status',
    ];
}
