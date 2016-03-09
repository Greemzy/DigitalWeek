@extends('layouts.app')

@section('content')
    @foreach($messages as $message)
      <div> {{ $message->}} :  {{ $message->content}} {{ $message->@date(created_at)}} </div>
    @endforeach
@endsection
