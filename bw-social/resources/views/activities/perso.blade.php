@extends('layouts.app')
@section('logo')
    <a href="{{ route('activities.create') }}" class="icon_activity">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    </a>
    <a href="{{ route('activities.index') }}" class="icon_activity">
        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
    </a>

@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach($activities as $activity)
            <div class="media" style="background-color:#fff;padding:15px;">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{ asset('assets/img/'.$activity->type->image) }}" style="height: 80px;width: auto" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading" style="font-weight: bold;">{{ $activity->name }}</h4>
                    <p>@datetimeActivity($activity->date_activity) &agrave; {{$activity->location}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
