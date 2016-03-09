<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\ConversationsMessages;

class ConversationsController extends Controller
{
  public function index() {
    $user = Auth::user();
    $resultat = DB::table('User')->where('user_id',$user->id);
    //conv_id de conversations_users
    //convs de conv
    return view('conversations', ['user' => $user ]);
  }

  public function getMessages() {
    $messages = ConversationsMessages::where(['conv_id' => 1])->orderBy('created_at', 'desc')->take(10)->get();
    return view('messages',  ['messages' => $messages]);
  }
}
