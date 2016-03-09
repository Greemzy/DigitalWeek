@extends('layouts.app')

@section('content')
  @if($conversations)
    @foreach($conversations as $conversation)
    <div class="row">
        <div class="col-sm-4 center"> {{ $conversation->id}} </div>
    </div>
    @endforeach
  @endif
@endsection
