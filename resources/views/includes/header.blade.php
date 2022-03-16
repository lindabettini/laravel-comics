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
          @foreach ($links as $link)
          <li>
            <a href="{{route($link['route_name'])}}">{{$link['title']}}</a>
          </li>
          @endforeach
        </ul>
      </nav>
    </div>
  </div>

</header>