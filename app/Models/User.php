<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    protected $fillable = [
        'UserFbID',
        'UserName',
        'UserFile',
        'UserEmail',
        'UserPassword',
        'UserMobile',
        'UserCountry',
        'UserState',
        'UserAddress',
        'UserEmailCode',
        'UserEmailVerify',
        'UserAbout',
        'UserAccount',
        'users_notify',
        'UserCreated',
        'UserLoginDate',
        'UserModified',
        'UserDelete',
        'notify_status'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
