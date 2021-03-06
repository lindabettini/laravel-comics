@php
$links = config('main_menu');
@endphp



<header class="container-fluid">
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
      <nav id="bottom-header" class="d-flex content-center align-center">
        <figure>
          <img src="../images/dc-logo.png" alt="DC logo" />
        </figure>
        <ul>
          @foreach ($links as $link)
          <li>
            <a class="{{ Request::route()->getName() === $link['route_name'] ? 'active' : ''}}" href="{{route($link['route_name'])}}">{{$link['title']}}</a>
          </li>
          @endforeach
        </ul>
      </nav>
    </div>
  </div>

</header>