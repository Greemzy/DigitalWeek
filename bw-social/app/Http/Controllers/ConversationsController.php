<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\ConversationsMessages;

class ConversationsController extends Controller
{
  public function index() {
    $user = Auth::user();
      dd($user);
    // useless si db $user_id =  DB::table('User')->where('user_id',$user->id);

    $conv_ids = DB::table('Conversations_users')->where('user_id',$user)->get();
    foreach($conv_ids as $conv_id)
    {

        $conversations = DB::table('Conversations_users')->where([
            ['conv_id',$conv_id->conv_id],
            ['users_id','<>',$conv_id->users_id],
        ])->get();


        $other_users = array();
        $i = 0;
        foreach($conversations as $conversation)
        {
            //variable a transmettre, régler le problème de vue
            //A faire dans la vue
            $other_user[$i] = DB::table('Users')->where('id',$conversation->users_id)->get();
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
        var_dump($other_users);
    }
    return view('conversations', ['conversations' => $user]);
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
