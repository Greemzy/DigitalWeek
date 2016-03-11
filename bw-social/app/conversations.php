<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversations extends Model
{
  protected $table = 'conversations';

  protected $fillable = ['id', 'created_at', 'updated_at'];

  public function getMessages(){
    return $this->hasMany('App\ConversationsMessages','conv_id');
  }

  public function getInterlocutor($userId){
    return ConversationsUsers::where('user_id', '<>' ,$userId);
  }
}
