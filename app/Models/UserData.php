<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserData extends Authenticatable
{
    use Notifiable;

    protected $table = 'users_data';
    protected $fillable = [
        'email',
        'password',
    ];
}
