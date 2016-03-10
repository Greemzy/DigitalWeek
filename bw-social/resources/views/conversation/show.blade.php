@extends('layouts.app')

@section('content')
<div id="messages" class="messages">
  <div id="lesMessages">
    @foreach($conversation->getMessages as $message)
    <div class="message">
      <div class="title">
        @if($message->user->image)
          <img class="imageMessages" src="{{ asset('assets/img/'.$message->user->image)}}">
        @else
          <img class="imageMessages" src="{{ asset('assets/img/blank-profile.jpg') }}">
        @endif
        {{ $message->user->name}} {{ $message->user->firstname}} </div>
      <div class="content">{{ $message->content}}</div>
      <time class="date">@datetime( $message->created_at)</time>
    </div>
    @endforeach
  </div>
  <div class="inputMessages">
    <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('conversation.add', ['conversation' => $conversation->id]) }}">
        {{ csrf_field() }}
      <input class="formMessages" type="text" name="content" placeholder="Message...">
    </form>
  </div>
</div>
@endsection
