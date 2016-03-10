<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeActivity extends Model
{
    protected $table = 'types_activities';

    protected $fillable = ['id','name','image'];

    protected $hidden = [];
}
