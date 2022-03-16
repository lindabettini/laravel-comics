@extends('layout.main')

@php
$comics = config('comics_data');
@endphp

@section('main')
<div class="container">
  <div class="row">
    @foreach ($comics as $comic)
    <div class="col">
      <div class="comic-card">
        <img src="{{$comic['thumb']}}" alt="">
      </div>
    </div>
    @endforeach
  </div>
</div>
@stop