@php
$links = config('main_menu');
@endphp



<header class="container">
  <div class="row">
    <div class="col">
      <div id="top-header" class="d-flex content-end">
        <div class="p-2">DC POWER VISA</div>
        <div class="p-2">ADDITIONAL DC SITES</div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <nav id="bottom-header">
        <ul>
          <li><a href="{{ url('/') }}">Comics</a></li>
          <li><a href="{{route('characters')}}">Character</a></li>
          <li><a href="{{route('games')}}">Games</a></li>
          <li><a href="{{route('news')}}">News</a></li>
        </ul>
      </nav>
    </div>
  </div>

</header>