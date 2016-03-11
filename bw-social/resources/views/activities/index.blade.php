@extends('layouts.app')
@section('logo')
    <a href="{{ route('activities.create') }}" class="icon_activity">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    </a>
    <a href="{{ route('activities.perso') }}" class="icon_activity">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
    </a>
@endsection

@section('content')
    <div class="row" id="list_activity">
        @foreach($activities as $activity)


            <div class="col-xs-12 col-sm-6 col-md-8 grid">
                <div class="activity">
                    <a href="{{ route('activities.show', [ '$activity' => $activity->id]) }}">
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
                            @else
                                <div class="info">
                                    <div class="bw_logo">
                                        <img src="{{ asset('assets/img/logo.jpg') }}">
                                    </div>
                                    <div class="user_name">
                                        <p class="white">Best Western</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </a>
                    <div class="content">
                        <a href="{{ route('activities.show', [ '$activity' => $activity->id]) }}" style="text-decoration: none;">
                            <h3 style="text-decoration: none;color:black;">{{ $activity->name }} <span class="date_activity"> {{$activity->date_activity}}</span></h3>
                        </a>
                        <div class="activity_description">
                            <p>
                                {{ $activity->description }}
                            </p>
                            @if(!is_null($user) && $user->id != $activity->user_id && !$activity->isParticipate())
                            <div style="text-align: center;margin: 10px;">
                                <a class="participate btn btn1" href="{{route('activities.add', ['activity' => $activity])}}">
                                    Participer
                                </a>
                            </div>

                            @endif
                        </div>


                        <a class="more">Voir plus...</a>
                        <a class="less hidden">Voir moins...</a>

                    </div>
                </div>
            </div>


        @endforeach
    </div>
    <div class="row grid">
        <div class="text-center">
            <button onclick="addActivity()" id="loadmore" class="btn1" style="color:white;padding:5px;margin-bottom:20px;">
                Plus d'activitées
            </button>
        </div>
    </div>
@endsection
