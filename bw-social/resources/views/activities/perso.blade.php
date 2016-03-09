@extends('layouts.base')

@section('menu')
<div class="navbar-header">

    <!-- Collapsed Hamburger -->
    <a href="{{ route('activities.create') }}" class="navbar-toggle collapsed">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
    </a>
    <a href="{{ route('activities.index') }}" class="navbar-toggle collapsed">
        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
    </a>

    <!-- Branding Image -->
    <a class="navbar-brand" href="{{ url('/activities') }}">
        Activités
    </a>
</div>
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
