@extends('layouts.app')

@section('content')

  @if(!is_null($user))
    @foreach($user->conversations as $conversation)
     <?php
          $message = $conversation->lastMessages;
          $content = $message->last();
      ?>
      @if(!is_null($content))
          <div class="conversation" style="padding: 10px;background-color: white;margin-bottom: 5px;">
              <a style="text-decoration: none;color:black" href="{{route('conversation.show', [ 'conversation' => $conversation->conv_id])}} ">
              <div class="row">
                <div class="col-xs-12">
                    @if($content->user->image)
                        <img class="imageMessages" src="{{ asset('assets/img/'.$content->user->image)}}">
                    @else
                        <img class="imageMessages" src="{{ asset('assets/img/blank-profile.jpg') }}">
                    @endif
                    <span style="font-weight: bold;">{{ $content->user->name}}</span> <a href="{{route('conversation.delete', [ 'conversation' => $conversation->conv_id])}}" style="float:right">X</a>
                </div>
            </div>
            <div class="row">
              <div class="col-xs-9">
                <p>{{ $content->content}}</p>
              </div>
              <div class="col-xs-3" style="padding-top:10px; padding-left: 0px;">
                @datetimea(date_create(($content->created_at)))
              </div>
            </div>
          </div>
        </a>
      @endif
    @endforeach
  @endif
@endsection
