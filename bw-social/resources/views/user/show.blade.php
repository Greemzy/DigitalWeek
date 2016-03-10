@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
                <div class="user_logo user_logo-solo">
                    <img src="{{ asset('assets/img/blank-profile.jpg') }}">
                </div>
        </div>

    </div>
    <div class="row">
        <div class="container">
            <div class="user_name-solo">
                <p> {{ $user->firstname}} {{ $user->firstname}}</p>
            </div>
        </div>
    </div>
@endsection