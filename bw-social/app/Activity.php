<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 08/03/2016
 * Time: 10:55
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'contest';

    protected $fillable = ['id','name','date_activity','location','description','hotel_id','user_id'];

    protected $hidden = [];
}