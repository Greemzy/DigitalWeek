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
            <div class="col-xs-12 col-sm-6 col-md-8 grid">
                <div class="activity">
                    <div class="image-container">
                        <img src="{{ asset('assets/img/'.$activity->type->image) }}" alt="..." class="activitybanner">
                        <div class="after"></div>
                        @if($activity->user->role != "admin")
                            <div class="info">
                                <div class="user_logo">
                                    <img src="{{ asset('assets/img/'.$activity->user->image) }}">
                                </div>
                                <div class="user_name">
                                    <p class="white"> {{ $activity->user->firstname}} {{ $activity->user->name}}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="content">
                        <h3>{{ $activity->name }}</h3>
                        <p class="">
                            {{ $activity->description }}
                        </p>
                        <span class="date_activity"> {{$activity->date_activity}}</span>


                        @if(!is_null($user) && $user->id != $activity->user_id && !$activity->isParticipate())
                            <a class="participate" href="{{route('activities.add', ['activity' => $activity])}}">Je
                                participe</a>
                        @endif
                    </div>
                </div>
                <ul>Liste des participants</ul>
                @foreach($users as $use)
                    <li>{{ $use->firstname}} {{$use->name}}</li>
                @endforeach
            </div>
    </div>

@endsection
