@extends('layouts.app')
@section('logo')
    <a href="{{ route('activities.create') }}" class="icon_activity">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
    </a>
    <a href="{{ route('activities.perso') }}" class="icon_activity">
        <span class="glyphicon glyphicon-knight" aria-hidden="true"></span>
    </a>
@endsection

@section('content')
    <div class="row" id="list_activity">
        @foreach($activities as $activity)
            <div class="col-xs-12 col-sm-6 col-md-8 grid">
                <div class="activity">
                    <div class="image-container">
                        <img src="{{ asset('assets/img/'.$activity->type->image) }}" alt="..." class="activitybanner">
                        <div class="after"></div>
                        <div class="info">
                            <div class="user_logo">
                                <img src="{{ asset('assets/img/blank-profile.jpg') }}">
                            </div>
                            <div class="user_name">
                                <p class="white"> {{ $activity->user->firstname}} {{ $activity->user->firstname}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h3>{{ $activity->name }}</h3>
                        <p class="activity_description">
                            {{ $activity->description }}
                        </p>
                        <span class="date_activity"> {{$activity->date_activity}}</span>
                        <a class="more">voir plus...</a>
                        <a class="less hidden">voir moins...</a>


                        @if(!is_null($user) && $user->id != $activity->user_id && !$activity->isParticipate())
                            <a class="participate" href="{{route('activities.add', ['activity' => $activity])}}">Je
                                participe</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row grid">
        <div class="text-center">
            <button onclick="addActivity()" id="loadmore" class="btn-plus">
                Plus d'activitées
            </button>
        </div>
    </div>
@endsection
