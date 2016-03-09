@extends('layouts.app')

@section('content')
  @if($conversations)
    @foreach($conversations as $conversation)
    <a href="/messages/{{ $conversation->id}}">
      <div>
        <div> {{ $conversation->id}} </div>
        <td> @date($conversation->begin_at) </td>
      </div>
    </a>
    @endforeach
  @endif
@endsection
