@php
$nav = config('top_footer_nav');
@endphp

<div id="top-footer">
  <div class="container">
    <ul>
      @foreach ($nav as $n)
      <li class="card">
        <img src="{{asset($n['img'])}}" alt="{{$n['text']}}" />
        <a href="#">{{ $n['text'] }}</a>
      </li>
      @endforeach
    </ul>
  </div>
</div>