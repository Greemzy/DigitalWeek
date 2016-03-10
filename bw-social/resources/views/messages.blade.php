@extends('layouts.app')

@section('content')
    @foreach($conversation->getMessages as $message)
      <div> {{ $message->name}} :  {{ $message->content}} @datetime( $message->created_at) </div>
    @endforeach
  <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('message.add', ['conv_id' => $conversation]) }}">
    <input type="text" name="content">
    <input type="submit" value="Envoyer">
  </form>
@endsection
