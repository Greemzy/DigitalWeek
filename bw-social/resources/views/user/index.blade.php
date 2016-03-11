@extends('layouts.app')

@section('content')
        <div class="row">
        @foreach($users as $user)
            @if(Auth::user()->id != $user->id)
            <a href="{{route('user.show', ['user' => $user])}}">
                <div class="col-xs-12 card-bd">
                    <div class="container card">
                    <span class="user_logo">
                        <img src="{{ asset('assets/img/'.$user->image) }}">
                    </span>
                    <span class="user_name">
                        <p> {{ $user->firstname}} {{ $user->name}}</p>
                    </span>
                    </div>
                </div>
            </a>
            @endif
        @endforeach
        </div>
@endsection