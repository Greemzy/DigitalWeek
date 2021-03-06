@extends('layouts.app')
@section('logo')
  <a href="{{ route('conversation.index') }}" class="icon_activity">
    <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
  </a>
@endsection

@section('content')
<div id="messages" class="messages">
  <div id="lesMessages">
    @foreach($conversation->getMessages->reverse() as $message)
    <div class="message">
      <?php $user = Auth::user();?>
      @if(!is_null($user) && $user->id == $message->user->id)
          <div class="title" style="text-align: right;">
            {{ $message->user->name}} {{ $message->user->firstname}}
            @if($message->user->image)
              <img class="imageMessages" src="{{ asset('assets/img/'.$message->user->image)}}">
            @else
              <img class="imageMessages" src="{{ asset('assets/img/blank-profile.jpg') }}">
            @endif
          </div>
      @else
        <div class="title">
          @if($message->user->image)
            <img class="imageMessages" src="{{ asset('assets/img/'.$message->user->image)}}">
          @else
            <img class="imageMessages" src="{{ asset('assets/img/blank-profile.jpg') }}">
          @endif
          {{ $message->user->name}} {{ $message->user->firstname}}
        </div>
      @endif
      <div class="content">{{ $message->content}}</div>
      <time class="date">@datetime_heure($message->created_at)</time>
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
