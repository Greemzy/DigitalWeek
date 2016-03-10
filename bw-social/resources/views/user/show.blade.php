@extends('layouts.app')

@section('content')
<div style="background-color:#fff;padding:20px;">
    <div class="row">
        <div class="container">
            <div class="user_logo user_logo-solo">
                <img src="{{ asset('assets/img/'.$user->image) }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="user_name-solo">
                <p> {{ $user->firstname}} {{ $user->name}}</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">

        </div>
    </div>
    <div class="row">
        <div class="container">
            <a href="{{ route('conversation.create', ['user' => $user]) }}">
                Envoyer un message
            </a>
        </div>
    </div>
</div>
@endsection