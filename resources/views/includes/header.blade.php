@php
$links = config('main_menu');
@endphp

<header>
  <div id="top-header"></div>
  <nav>
    <ul>
      <li><a href="{{ url('/') }}">Comics</a></li>
      <li><a href="{{route('characters')}}">Character</a></li>
      <li><a href="{{route('games')}}">Games</a></li>
      <li><a href="{{route('news')}}">News</a></li>
    </ul>
  </nav>
</header>