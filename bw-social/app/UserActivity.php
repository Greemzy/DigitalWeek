<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $table = 'users_activities';

    protected $fillable = ['id','user_id','activity_id', 'created_at', 'updated_at'];

    protected $hidden = [];

    public function activity(){
        return $this->belongsTo('App\Activity');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
