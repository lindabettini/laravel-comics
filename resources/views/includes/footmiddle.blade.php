@php
$dcs = config('footer_dcs');
$products = config('footer_products');
$shops = config('footer_shops');
$sites = config('footer_sites');
@endphp


<div id="middle-footer">
	<div class="container">
		<nav id="footer-nav" class="col-6">
			<div class="nav-list">
				<h3>DCS</h3>
				<ul>
					@foreach ($dcs as $d)
					<li><a href="#">{{$d}}</a></li>
					@endforeach
				</ul>
			</div>


			<div class="nav-list">
				<h3>PRODUCTS</h3>
				<ul>
					@foreach ($products as $p)
					<li><a href="#">{{$p}}</a></li>
					@endforeach
				</ul>
			</div>


			<div class="nav-list">
				<h3>SHOPS</h3>
				<ul>
					@foreach ($shops as $s)
					<li><a href="#">{{$s}}</a></li>
					@endforeach
				</ul>
			</div>


			<div class="nav-list">
				<h3>SITES</h3>
				<ul>
					@foreach ($sites as $s)
					<li><a href="#">{{$s}}</a></li>
					@endforeach
				</ul>
			</div>
		</nav>
		<div id="col-logo" class="col-6"></div>
	</div>
</div>