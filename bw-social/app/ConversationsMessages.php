<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConversationsMessages extends Model
{
  protected $table = 'conversations_messages';

  protected $fillable = ['id', 'user_id', 'conv_id', 'content', 'created_at', 'updated_at', 'read'];

  public function user(){
    return $this->belongsTo('App\User');
  }
  
}
