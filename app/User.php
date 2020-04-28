<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'name', 'email', 'password', 'is_admin', 'provider', 'provider_id', 'image'
=======
        'name', 'email', 'password', 'is_admin'
>>>>>>> 15a10f0a9162546ce1e0e7d1195aadcffb9eafa3
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD
=======

    public static function adminlte_image()
    {
        return 'https://i.picsum.photos/id/1066/2144/1424.jpg';
    }

    public static function adminlte_desc()
    {
        return 'Just a cute baby.';
    }
>>>>>>> 15a10f0a9162546ce1e0e7d1195aadcffb9eafa3
}
