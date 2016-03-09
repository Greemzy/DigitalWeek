@extends('layouts.app')
@section('logo')
    <a href="{{ route('activities.create') }}" class="">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
    </a>
    <a href="{{ route('activities.perso') }}" class="">
        <span class="glyphicon glyphicon-knight" aria-hidden="true"></span>
    </a>
@endsection

@section('content')
<div class="container">
    <div class="row" id="list_activity">
        @foreach($activities as $activity)
            <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="thumbnail">
                    <img src="{{ asset('assets/img/'.$activity->type->image) }}" alt="...">
                    <div class="caption">
                        <h3>{{ $activity->name }} <br><span class="date"> {{$activity->date_activity}}</span></h3>
                        <p class="activity_description">
                            {{ $activity->description }}
                        </p>
                        <a class="more">voir plus...</a>
                        @if(Auth::user()->id != $activity->user_id && !$activity->isParticipate())
                            <a class="participate" href="{{route('activities.add', ['activity' => $activity])}}">Je participe</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="text-center">
            <button onclick="addActivity()" id="loadmore">
                Plus d'activités
            </button>
        </div>
    </div>
</div>
@endsection
