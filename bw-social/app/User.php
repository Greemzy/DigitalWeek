<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','firstname', 'email', 'password','age','rank','id_hotel'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userActivity()    {
        return $this->hasMany('App\UserActivity');
    }

    public function conversations(){
      return $this->hasMany('App\ConversationsUsers');
    }
}
