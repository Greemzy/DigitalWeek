<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Conversations;

class ConversationsController extends Controller
{
    public function index() {
      $conversations = Conversations->get();
      return view('conversations', ['conversations' => $conversations->values()->all()]);
    }
}
