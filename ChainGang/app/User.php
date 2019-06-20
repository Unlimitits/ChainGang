<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_gebruikersnaam', 'email', 'password',  'user_voornaam','user_achternaam', 'user_telefoonnummer', 'user_straat', 'user_postcode', 'user_plaats',
        'user_foto', 'user_wilNieuwsbrief',
        'email_verified_at',

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


    public function Review(){
        return $this->hasMany('App\Review');
    }

    public function bestellingen(){
        return $this->hasMany('App\Bestelling');
    }

}
