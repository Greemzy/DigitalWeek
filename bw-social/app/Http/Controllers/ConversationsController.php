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

  public function getMessages(Conversations $conversations) {

    //conv = Conversations::find($conv_id);
      //dd($conversations);
    return view('messages',  ['conversation' => $conversations]);
  }

  public function addMessage(Request $request, Conversations $conversation)
  {
      $data = $request->all();
      $message = new ConversationsMessages();
      $message->content = $data['content'];
      $message -> user_id = 1;
      $message -> conv_id = $conversation->id;
      $message -> read = 0 ;
      $message->created_at = date("Y-m-d H:i:s");
      $message->save();

      dd($message);

      return redirect('messages/{$conv_id}');
  }

}
