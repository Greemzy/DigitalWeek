<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function show($user)
    {
        return view('user.index',['user' => $user]);
    }

}
