<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'firstName',
        'lastName',
        'username',
        'birth',
        'email',
        'password',
        'id_roles',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
