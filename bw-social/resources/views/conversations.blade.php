@extends('layouts.app')

@section('content')
  @if($conversations)
    @foreach($conversations as $conversation)
    <div>
        <td> {{ $conversation->id}} </td>
        <td> {{ $conversation->brand_id }} </td>
        <td> {{ $conversation->title }} </td>
        <td> {{ $conversation->description }} </td>
        <td> @date($conversation->begin_at) </td>
        <td><a href="/conversations/{{ $conversation->id}}">Voir les photos du concours</a></td>
    </div>
    @endforeach
  @endif
@endsection
