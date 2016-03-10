<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 08/03/2016
 * Time: 10:55
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Activity extends Model
{
    protected $table = 'activities';

    protected $fillable = ['id','name','date_activity','location','description','hotel_id','user_id', 'type_id'];

    protected $hidden = [];

    public $image;
    public $useract;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function type(){
        return $this->belongsTo('App\TypeActivity');
    }

    public function participate(){
        return $this->hasMany('App\UserActivity','activity_id');
    }

    public function isParticipate(){
        $userid = Auth::user()->id;
        $part = $this->participate()->get();
        foreach ($part as $user) {
            if ($user->user_id == $userid) {
                return true;
            }
        }
        return false;
    }




}