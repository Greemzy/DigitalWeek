@extends('layouts.app')
@section('logo')
    <a href="{{ route('activities.create') }}" class="">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
    </a>
    <a href="{{ route('activities.index') }}" class="">
        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
    </a>

@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach($activities as $activity)
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{ asset('assets/img/'.$activity->type->image) }}" style="height: 80px;width: auto" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{ $activity->name }}</h4>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
