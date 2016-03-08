<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConversationsUsers extends Model
{
  protected $table = 'conversations_users';

  protected $fillable = ['user_id', 'conv_id'];


  public function getConversations(){
    return $this->hasMany('App\Conversations');
  }
}
