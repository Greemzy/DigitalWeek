<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConversationsUsers extends Model
{
  protected $table = 'conversations_users';

  protected $fillable = ['user_id', 'conv_id'];

  public $timestamps = false;

  public $primaryKey = 'user_id';

  public function getConversations(){
    return $this->hasMany('App\Conversations');
  }

  public function lastMessages(){
    return $this->hasMany('App\ConversationsMessages', 'conv_id', 'conv_id')->where('user_id', "<>", $this->user_id);
  }
    
  public function getInterlocutor(){
    return $this->belongsTo('App\ConversationsUsers', 'conv_id', 'conv_id')->where('user_id', "<>", $this->user_id);
  }
    
  public function user(){
    return $this->belongsTo('App\User');
  }
}
