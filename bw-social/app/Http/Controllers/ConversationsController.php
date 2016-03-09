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

    // useless si db $user_id =  DB::table('User')->where('user_id',$user->id);

    $conv_ids = DB::table('Conversations_users')->where('user_id',$user->id)->get();
    foreach($conv_ids as $conv_id)
    {

        $conversations = DB::table('Conversations_users')->where([
            ['conv_id',$conv_id->conv_id],
            ['users_id','<>',$conv_id->users_id],
        ])->get();

        foreach($conversations as $conversation)
        {
            //variable a transmettre, régler le problème de vue
            //A faire dans la vue
            $other_users = DB::table('User')->where('id',$conversation->users_id)->get();

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
    return view('conversations', ['conversations' => $conversations]);
  }

  public function getMessages($conv_id) {
    $messages = ConversationsMessages::where(['conv_id' => $conv_id])->orderBy('created_at', 'desc')->take(10)->get();
    return view('messages',  ['messages' => $messages]);
  }
}


        /*
        Messages
        Si on passe par conversations:
        $convs = DB::table('Conversations')->where('id',$conv_id->conv_id)->get();
        foreach($convs as $conv)
        {

        Sinon et de toute façon:

        $messages = DB::table('Conversations_Messages')->where('conv_id',$conv_id->conv_id)->get();
        */
