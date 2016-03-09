<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\ConversationsMessages;
use App\ConversationsUsers;

class ConversationsController extends Controller
{
  public function index() {
    $user = Auth::user();
    // useless si db $user_id =  DB::table('User')->where('user_id',$user->id);

    $conv_ids = ConversationsUsers::where(['user_id' => 1])->get();
    foreach($conv_ids as $conv_id)
    {
        $conversations = ConversationsUsers::where([
            ['conv_id',$conv_id->conv_id],
            ['user_id','<>',$conv_id->user_id],
        ])->get();


        $other_users = array();
        $i = 0;
        foreach($conversations as $conversation)
        {
            //variable a transmettre, régler le problème de vue
            //A faire dans la vue
            echo($conversation->user_id);
            echo($conversation->conv_id);
            $other_users[$i] = DB::table('Users')->where('users.id','=',$conversation->user_id)
                ->join('conversations_messages', function ($join)use($conversation) {
                        $join->on('users.id', '=', 'conversations_messages.user_id')
                             ->where('conversations_messages.conv_id', '=', $conversation->conv_id);
                    })
                ->get();
            $i++;
            /*
            foreach($other_users as other_user)
            {
                <div>
                ...
                </div>
            }
            */
        }
    }
    return view('conversations', ['other_users' => $other_users]);
  }

  public function getMessages($conv_id) {
    $messages = ConversationsMessages::where(['conv_id' => $conv_id])
    ->join('users', 'users.id', '=', 'conversations_messages.id')
    ->orderBy('conversations_messages.created_at', 'asc')->take(10)->get();
    return view('messages',  ['messages' => $messages]);
  }
/*
  public function addMessage(Request $request, $conv_id)
  {
    $user = Auth::user();
      dd($user);
      dd($request);
      $message = ConversationsMessages::create($request->all());
      $message -> user_id = 1;
      $message -> conv_id = $conv_id;
      $message -> content = 'iygiygiyg';
      $message -> read = 0 ;
      $message->created_at = date("Y-m-d H:i:s");
      $message->save();

      return redirect('messages/{$conv_id}');
  }*/

}
