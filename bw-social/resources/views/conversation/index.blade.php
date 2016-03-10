@extends('layouts.app')

@section('content')
    <div class="container" style="margin:auto;">
    @if(!is_null($user))
        @foreach($user->conversations as $conversation)
            <a href="{{route('conversation.show', [ 'conversation' => $conversation->id])}} ">
                <div class="row">
                    <?php
                        $message = $conversation->lastMessages;
                        $content = $message->last();
                    ?>
                    @if(!is_null($content))
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
                    @endif

                </div>
            </a>
        @endforeach
    @endif
    </div>
@endsection
