@extends('layouts.app')
@section('logo')
    <a href="{{ route('activities.index') }}" class="icon_activity">
        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
    </a>
    <a href="{{ route('activities.perso') }}" class="icon_activity">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
    </a>
@endsection

@section('content')
    <div class="row" id="list_activity">
        <div class="col-xs-12 col-sm-6 col-md-8 grid">
            <div class="activity">
                <div class="image-container">
                  <a href="{{route('user.show', ['user' => $activity->user])}}">
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
                  </a>
                </div>
                <div class="content">
                    <h3>{{ $activity->name }}</h3>
                    <p class="">
                        {{ $activity->description }}
                    </p>

                    <?php
                        setlocale (LC_TIME, 'fr_FR','fra');
                        //Définit le décalage horaire par défaut de toutes les fonctions date/heure
                        date_default_timezone_set("Europe/Paris");
                        //Definit l'encodage interne
                        mb_internal_encoding("UTF-8");
                        $strDate = mb_convert_encoding('%A %d %B %Y &agrave; %Hh%M','ISO-8859-9','UTF-8');
                        $date = strftime($strDate ,strtotime($activity->date_activity));
                    ?>
                    <span class="date_activity" style="color:#B40040">Le {{$date}} , {{$activity->location}}</span>
                    @if(!is_null($user) && $user->id != $activity->user_id && !$activity->isParticipate())
                        <div style="text-align:center;margin-top:15px;">
                            <a class="participate btn btn1" href="{{route('activities.add', ['activity' => $activity])}}">Participer</a>
                        </div>
                    @endif
                </div>
                <hr>
                <span style="font-weight:bold;padding:10px;">Liste des participants</span>
                <ul>
                    @if($users->count() > 0)
                        @foreach($users as $use)
                            <li style="padding : 10px;height:75px;">
                                    <div class="user_logo">
                                        <img src="{{ asset('assets/img/'.$use->user->image) }}">
                                    </div>
                                    <div class="user_name">
                                        <p style="font-weight:normal;"> {{ $use->user->firstname}} {{ $use->user->name}}</p>
                                    </div>
                            </li>
                        @endforeach
                    @else
                        <li style="padding:10px;height:50px;"> Aucun participant </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>

@endsection
