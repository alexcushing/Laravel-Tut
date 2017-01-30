@extends('layout')

@section('content')
  <div class="title">
    About
  </div>
  <div class="subtitle m-b-md">
      People looped with blade:
      @foreach ($people as $person)
        <li>{{$person}}</li>
      @endforeach
  </div>
@endsection

@section('footer')
  footer
@endsection
