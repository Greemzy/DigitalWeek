<?php

namespace App\Http\Controllers;

use App\Conversations;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\ConversationsMessages;
use App\ConversationsUsers;

class ConversationsController extends Controller
{
  public function index() {
    $user = Auth::user();
    return view('conversations', ['user' => $user]);
  }

  public function getMessages(Conversations $conversations) {
        return view('messages',  ['conversation' => $conversations]);
  }

  public function addMessage(Request $request, Conversations $conversation)
  {
      $data = $request->all();
      $message = new ConversationsMessages();
      $message->content = $data['content'];
      $message -> user_id = Auth::user()->id;
      $message -> conv_id = $conversation->id;
      $message -> read = 0 ;
      $message->created_at = date("Y-m-d H:i:s");
      $message->save();

      return redirect(route('conversations.show', ['conv_id' => $conversation]));
  }
    
    
  public function deleteConversation(Conversations $conversation) {
      
      $conversation->delete();

      return redirect(route('conversations'));
  }

}
