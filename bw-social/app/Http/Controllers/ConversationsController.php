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
    return view('conversation.index', ['user' => $user]);
  }

  public function show(Conversations $conversations) {
        return view('conversation.show', ['conversation' => $conversations]);
  }

    public function create(User $user)
    {
        $auth = Auth::user();
        $convAuth = ConversationsUsers::where('user_id','=', $auth->id)
            ->select('conversations_users.conv_id')
            ->get();

        $userConv = ConversationsUsers::whereIn('conv_id', $convAuth )->where('user_id', '=', $user->id);
        if($userConv->count() > 0){
            return redirect(route('conversation.show' , ['conversation' => $userConv->first()->conv_id]));
        }

        $conversation = new Conversations();
        $conversation->created_at = date("Y-m-d H:i:s");
        $conversation->updated_at = date("Y-m-d H:i:s");
        $conversation->save();

        $conv1 = new ConversationsUsers();
        $conv1->user_id = $auth->id;
        $conv1->conv_id = $conversation->id;
        $conv1->save();

        $conv2 = new ConversationsUsers();
        $conv2->user_id = $user->id;
        $conv2->conv_id = $conversation->id;
        $conv2->save();

        return redirect(route('conversation.show' , ['conversation' => $conversation->id]));

    }

    public function delete(Conversations $conversation){

        $user = Auth::user();
        $conversationUsers = ConversationsUsers::where('user_id', '=' , $user->id)->where('conv_id', '=', $conversation->id)->delete();

        return redirect(route('conversation.index'));
    }

  public function addMessage(Request $request, Conversations $conversation)
  {
      $data = $request->all();
      $message = new ConversationsMessages();
      $message->content = $data['content'];
      $message->user_id = Auth::user()->id;
      $message->read = 0 ;
      $message->created_at = date("Y-m-d H:i:s");
      $message->conv_id = $conversation->id;
      $message->save();

      return redirect(route('conversation.show', ['conversation' => $conversation->id]));
  }

}
