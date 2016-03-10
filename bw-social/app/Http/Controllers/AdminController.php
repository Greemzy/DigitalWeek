<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TypeActivity;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {
        $type = TypeActivity::all();
        return view('admin.create', ['types' => $type]);
    }
}
