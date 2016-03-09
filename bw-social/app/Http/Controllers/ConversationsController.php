<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\ConversationsMessages;

class ConversationsController extends Controller
{
  /*public function index() {
    $user = Auth::user();
    $resultat = db('User')->where('user_id','=',$user->id);
    //conv_id de conversations_users
    $les_conv_id = db('')
    //convs de conv
    //return view('user', ['user' => $user, ]);
  }*/

  public function getMessages(Request $test) {
    $messages = ConversationsMessages::where(['conv_id' => 1])->orderBy('created_at', 'desc')->take(10)->get();
    return view('site.messages', ['messages' => $messages]);
  }
}
