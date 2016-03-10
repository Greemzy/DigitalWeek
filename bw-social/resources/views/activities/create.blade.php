@extends('layouts.app')

@section('logo')
    <a href="{{ route('activities.index') }}" class="icon_activity">
        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
    </a>
    <a href="{{ route('activities.perso') }}" class="icon_activity">
        <span class="glyphicon glyphicon-knight" aria-hidden="true"></span>
    </a>
@endsection

@section('content')
    <br>
<div class="container">
    <div class="row">
        <div class="col-xs-10 col-sm-10">
        <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('activities.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" placeholder="...">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" placeholder="...">
            </div>
            <div class="form-group">
                <label for="location">Lieu</label>
                <input type="text" class="form-control" name="location">
            </div>
            <div class="form-group">
                <label for="date_activity">Date</label>
                <input type="datetime" id="datepicker" class="form-control" name="date_activity">
            </div>
            <div class="form-group">
                <label for="type_id">Thème</label>
                <select class="form-control" name="type_id">
                    @foreach($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-default">Ajouter</button>
        </form>
        </div>
    </div>
</div>
@endsection
