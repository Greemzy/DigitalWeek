@extends('layouts.app')

@section('content')
    @foreach($messages as $message)
      <div>
        <div> {{ $message->}} </div>
        <div> {{ $message->content}} </div>
        <div> {{ $message->@date(created_at)}} </div>
      </div>
    @endforeach
@endsection
