<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class ConversationsController extends Controller
{
  public function index() {
    $user = Auth:::user();
    $resultat = db('User')->where('user_id','=',$user->id);
    //conv_id de conversations_users

    //convs de conv
    return view('user', ['user' => $user, ]);
  }
}
