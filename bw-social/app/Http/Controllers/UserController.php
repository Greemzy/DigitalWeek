<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($user)
    {
        return view('user.show',['user' => $user]);
    }
    public function index()
    {
        $users = User::where(['id_hotel' => Auth::user()->id_hotel])->get();
        return view('user.index',['users' => $users]);

    }
}
