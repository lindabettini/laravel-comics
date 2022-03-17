<section id="comics">
  <div class="container">
    <div class="row content-center">
      @foreach ($comics as $index => $comic)
      <div class="col-2">
        <div class="comic-card">
          <a href="{{ route('comic', ['id'=> $index])}}">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
          </a>
          <a href="#">{{$comic['title']}}</a>
        </div>
      </div>
      @endforeach
      <div class="btn-container"><button class="primary-btn">LOAD MORE</button></div>
    </div>
  </div>
</section>