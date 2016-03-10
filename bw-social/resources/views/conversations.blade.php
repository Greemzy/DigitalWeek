@extends('layouts.app')

@section('content')
    <div class="container" style="margin:auto;">

    @foreach($other_users as $other_user)
        @foreach($other_user as $user)
             <a href="{{route('conversations.show', [ 'conv_id' => $user->conv_id])}} ">
              <div class="row">
                <div class="col-xs-3 text-center"> {{ $user->name}} {{ $user->email}}
                </div>
                  <div class="col-xs-6">
                    <p>Dernier message enregistré :
                        {{ $user->content }}
                    </p>

                </div>
                  <div class="col-xs-3">
                    @datetime(date_create(($user->created_at)))
                    </div>
              </div>
            </a>
        @endforeach
    @endforeach
    </div>
@endsection
