@extends('layout')

@section('content')
  <div class="subtitle">
    cards
    @foreach ($cards as $card )
      <div>
        {{ $card->title }}
      </div>
    @endforeach
  </div>
@endsection
