@extends('layouts.app')

@section('content')
    @foreach($messages as $message)
      <div> {{ $message->name}} :  {{ $message->content}} @datetime( $message->created_at) </div>
    @endforeach
  <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('message.add', ['conv_id' => $message->conv_id]) }}">
    <input type="text" name="envoieMessage">
    <input type="submit" value="Envoyer">
  </form>
@endsection
