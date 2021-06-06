<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\profile;


class User extends Authenticatable
{

 

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'username' , 'name', 'lastname', 'email', 'password', 'active', 'activation_token','pic','slug'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile()
    {
        return $this->hasOne('App\profile');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function laptops(){
        return $this->hasMany('App\Laptop');
    }

    public function phones(){
        return $this->hasMany('App\Phone');
    }

    public function tablets(){
        return $this->hasMany('App\Tablet');
    }

    public function periferiakas(){
        return $this->hasMany('App\Periferiaka');
    }
}
