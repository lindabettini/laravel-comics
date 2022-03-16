<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Comics</title>
  <!--TITLE DINAMICO!!!-->
</head>

<body>
  @include('includes.header')
  <div id="jumbotron"></div>

  <main>
    @yield('main')
  </main>

  @include('includes.foottop')
  @include('includes.footmiddle')
  @include('includes.footbottom')
  <script src=" {{asset('js/app.js')}}">
  </script>
</body>

</html>