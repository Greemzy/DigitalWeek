@extends('layouts.app')

@section('content')
    <div class="container" style="margin:auto;">
    @if(!is_null($user))
        @foreach($user->conversations as $conversation)
           <?php
                $message = $conversation->lastMessages;
                $content = $message->last();
            ?>
           @if(!is_null($content))
                <a href="{{route('conversation.delete', [ 'conversation' => $conversation->conv_id])}} ">X</a>
                <a href="{{route('conversation.show', [ 'conversation' => $conversation->conv_id])}} ">
                    <div class="row">


                                <div class="col-xs-3 text-center"> {{ $content->user->name}} {{ $content->user->email}}
                                </div>
                                <div class="col-xs-6">
                                    <p>Dernier message enregistré :
                                        {{ $content->content}}
                                    </p>

                                </div>
                                <div class="col-xs-3">
                                    @datetime(date_create(($content->created_at)))
                                </div>


                    </div>
                </a>
           @endif
        @endforeach
    @endif
    </div>
@endsection
