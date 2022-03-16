@php
$dcs = config('footer_dcs');
$products = config('footer_products');
$shops = config('footer_shops');
$sites = config('footer_sites');
@endphp


<div id="middle-footer" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<nav id="footer-nav">

					<div class="nav-list">
						<h5>DCS</h5>
						<ul>
							@foreach ($dcs as $d)
							<li><a href="#">{{$d}}</a></li>
							@endforeach
						</ul>
					</div>


					<div class="nav-list">
						<h5>PRODUCTS</h5>
						<ul>
							@foreach ($products as $p)
							<li><a href="#">{{$p}}</a></li>
							@endforeach
						</ul>
					</div>


					<div class="nav-list">
						<h5>SHOPS</h5>
						<ul>
							@foreach ($shops as $s)
							<li><a href="#">{{$s}}</a></li>
							@endforeach
						</ul>
					</div>


					<div class="nav-list">
						<h5>SITES</h5>
						<ul>
							@foreach ($sites as $s)
							<li><a href="#">{{$s}}</a></li>
							@endforeach
						</ul>
					</div>
					<div>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga, ratione accusantium aliquam obcaecati laudantium sed pariatur nesciunt incidunt sit, optio natus modi, repudiandae veritatis nobis aliquid ducimus ullam animi. Quisquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione quod officiis accusamus nam minus porro consequuntur, ipsam adipisci, ut, non quas nulla! </p>
					</div>
				</nav>
			</div>
			<div id="colon-logo" class="col-6"></div>
		</div>
	</div>
</div>