@extends('layouts.app')

@section('content')
    @foreach($messages as $message)
      <div> nom prenom :  {{ $message->content}} {{ $message->@datetime(created_at)}} </div>
    @endforeach
@endsection
