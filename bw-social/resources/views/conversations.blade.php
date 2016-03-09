@extends('layouts.app')

@section('content')
  @if($conversations)
    @foreach($conversations as $conversation)
    <div>
        <div> {{ $conversation->id}} </div>

        <td> @date($conversation->begin_at) </td>
        <td><a href="/messages/{{ $conversation->id}}">Voir les photos du concours</a></td>
    </div>
    @endforeach
  @endif
@endsection
