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
    <h2 style="text-align:center">Vos activités</h2>
    <div class="row" style="padding:0px 10px 0px 10px;">
        @foreach($activities as $activity)
            <a href="{{route('activities.show', ['activity' => $activity])}}">
                <div class="media" style="background-color:#fff;padding:15px;margin-bottom:15px;">
                    <div class="media-left">
                        <img class="media-object" src="{{ asset('assets/img/'.$activity->type->image) }}" style="height: 80px;width: auto" alt="...">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading" style="font-weight: bold;">{{ $activity->name }}</h4>
                        <?php
                            setlocale (LC_TIME, 'fr_FR','fra');
                            //Définit le décalage horaire par défaut de toutes les fonctions date/heure
                            date_default_timezone_set("Europe/Paris");
                            //Definit l'encodage interne
                            mb_internal_encoding("UTF-8");
                            $strDate = mb_convert_encoding('%A %d %B %Y, %Hh%M','ISO-8859-9','UTF-8');
                            $date = strftime($strDate ,strtotime($activity->date_activity));
                        ?>
                        <p>Le {{$date}} &agrave; {{$activity->location}}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
