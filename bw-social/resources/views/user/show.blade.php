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
    <br>
    <div class="row">
        <div class="container">
            <div>
                Reward :
                <span>{{ $user->rank }}</span>
            </div>
            <div>
                Age :
                <?php
                    $tz  = new DateTimeZone('Europe/Brussels');
                    $age = DateTime::createFromFormat('Y-m-d H:i:s', $user->age)->diff(new DateTime('now'))->y;
                ?>
                <span>{{ $age }} ans</span>
            </div>
        </div>
    </div>
    <br>
    @if(!Auth::user()->id == $user->id)
    <div class="row">
        <div class="container">
            <a href="{{ route('conversation.create', ['user' => $user]) }}">
                Envoyer un message
            </a>
        </div>
    </div>
    @endif
</div>
@endsection