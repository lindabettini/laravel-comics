@extends('layout.main')

@section('main')
<div id="product-detail" class="container-800">
  <div class="row p-3">
    <div class="col-9 p-3">
      <h1 class="p-2">{{$comic['title']}}</h1>
      <div class="price-box d-flex content-space-btn">
        <div class="d-flex content-space-btn b-1">
          <div>Us Price:{{$comic['price']}}</div>
          <div>AVAILABLE</div>
        </div>
        <div class="b-1">Check Availability</div>
      </div>
      <p><span>{{$comic['description']}}</span></p>
    </div>
    <div class="col-3 p-3">
      <h5 class="mt-2">ADVERTISEMENT</h5>
      <img src="{{asset('images/apply-now.jpg')}}" alt="">
    </div>
  </div>
  <div class="row">
    <div class="col-6 p-3">
      <div class="p-3">
        <h3>Talent</h3>
        <hr>
        <h5>Art by:</h5>
        <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur eligendi excepturi, quis repellat debitis laborum rem vel. </a>
      </div>
      <hr>
      <div class="p-3">
        <h5>Written by::</h5>
        <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde animi, ullam cum pariatur optio error quidem! Deleniti, neque delectus odio dolores ad perferendis. Nihil, natus suscipit vero dignissimos blanditiis animi?</a>
      </div>
    </div>
    <div class="col-6 p-3">
      <h3>Spaces</h3>
      <div class="p-3">
        <span class="h5">Series:</span>
        <span>{{$comic['type']}}</span>
      </div>
      <hr>
      <div class="p-3">
        <span class="h5">U.S. Price::</span>
        <span>{{$comic['price']}}</span>
      </div>
      <hr>
      <div class="p-3">
        <span class="h5">On Sale Date</span>
        <span>{{$comic['sale_date']}}</span>
      </div>
      <hr>

    </div>
  </div>

</div>
@endsection