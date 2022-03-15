<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comics | Home</title>
</head>

<body>
  <header>
    <div class="top-header"></div>
    <nav>
      <ul>
        @foreach ($pages as $title=>$route)
        <li><a href="{{route($route)}}">{{$title}}</a></li>
        @endforeach
      </ul>
    </nav>
  </header>
</body>

</html>