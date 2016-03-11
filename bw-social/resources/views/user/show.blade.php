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
                @if($user->role != "admin")
                    <span>{{ $user->rank }}</span>
                @else
                    <span>Admin</span>
                @endif
            </div>
            <div>
                @if($user->role != "admin")
                Age :
                <?php
                    $tz  = new DateTimeZone('Europe/Brussels');
                    $age = DateTime::createFromFormat('Y-m-d H:i:s', $user->age)->diff(new DateTime('now'))->y;
                ?>
                <span>{{ $age }} ans</span>
                @endif
            </div>
        </div>
    </div>
    <br>
    @if(Auth::user()->id != $user->id)
        @if($user->role != "admin")

        <div class="row">
            <div class="container messagecont">
                <a href="{{ route('conversation.create', ['user' => $user]) }}" class="btn btn-default">
                    Envoyer un message
                </a>
            </div>
        </div>
            @endif
    @endif
</div>
@endsection