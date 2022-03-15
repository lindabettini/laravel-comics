<header>
  <div id="top-header"></div>
  <nav>
    <ul>
      @foreach ($pages as $title=>$route)
      <li><a href="{{route($route)}}">{{$title}}</a></li>
      @endforeach
    </ul>
  </nav>
</header>