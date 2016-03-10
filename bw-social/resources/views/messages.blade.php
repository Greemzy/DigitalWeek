@extends('layouts.app')

@section('content')
<div class="messages">
    @foreach($conversation->getMessages as $message)
    <div class="message">
      <div class="title"> {{ $message->user->name}} </div>
      <div class="content">{{ $message->content}}</div>
        <time class="date">@datetime( $message->created_at)</time>
        </div>
    @endforeach
  <div class="inputMessages">
    <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('conversations.add', ['conv_id' => $message->conv_id]) }}">
        {{ csrf_field() }}
      <input class="formMessages" type="text" name="content" placeholder="Message...">
    </form>
  </div>
</div>
@endsection
