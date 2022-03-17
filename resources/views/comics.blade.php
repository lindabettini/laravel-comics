@extends('layout.main')

@php
$comics = config('comics_data');
@endphp

@section('main')
<section id="comics">
  <div class="container">
    <div class="row content-center">
      @foreach ($comics as $comic)
      <div class="col-2">
        <div class="comic-card">
          <figure>
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
          </figure>
          <a href="#">{{$comic['title']}}</a>
        </div>
      </div>
      @endforeach
      <div class="btn-container"><button class="primary-btn">LOAD MORE</button></div>
    </div>
  </div>
</section>
@stop