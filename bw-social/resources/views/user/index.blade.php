@extends('layouts.app')

@section('content')
        <div class="row">
        @foreach($users as $user)
            <a href="{{route('user.show', ['user' => $user])}}">
                <div class="col-lg-2 col-md-2 col-sm-4 card-bd">
                    <div class="container card">
                    <span class="user_logo">
                        <img src="{{ asset('assets/img/blank-profile.jpg') }}">
                    </span>
                    <span class="user_name">
                        <p> {{ $user->firstname}} {{ $user->firstname}}</p>
                    </span>
                    </div>
                </div>
            </a>

        @endforeach
        </div>
@endsection