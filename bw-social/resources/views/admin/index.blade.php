@extends('layouts.admin')
@section('logo')
    <a href="{{ route('admin.activity.create') }}" class="icon_activity">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
    </a>
    <a href="/logout" class="icon_activity">
        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
    </a>
@endsection

@section('content')
        <div class="container">
            <div class="col-sm-12 col-md-12 center">
                <p class="centertxt">
                    <a href="{{ route('admin.activity.create') }}" class="btn btn-default">Nouvelle Activitée</a>
                </p>
            </div>
        </div>
@endsection
