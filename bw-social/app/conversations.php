<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversations extends Model
{
  protected $table = 'conversations';

  protected $fillable = ['id', 'created_at', 'updated_at'];

  public function getMessages(){
    return $this->hasMany('App\ConversationsMessages');
  }

  public function getInterlocutor($userId){
    return $this->hasMany('App\ConversationsUsers')->where('user_id', '<>' ,$userId);
  }
}
