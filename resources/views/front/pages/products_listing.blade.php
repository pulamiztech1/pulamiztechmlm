@extends('layouts.frontLayouts.front_layout')
@section('content')
<!-- start main content -->
<main class="main-container ptb-40">
	<section class="block gray no-padding">
		<div class="lookcare-slider-bottom-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 col-xs-12 product-list">
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="men_area pt-40">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="block-heading-two">
						<h3><span>Our Products</span></h3>
					</div>
					
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div id="shop-all" class="row">
						@foreach($products as $product)
						<div class="col-xs-12 col-sm-6 col-md-3 product-item filter-best">
							<div class="product-img">
								<img src="{{ asset('images/backend_images/products/'.$product['product_image']) }}" alt="{{ $product['product_name'] }}">
								<div class="product-hover">
									<div class="product-cart">
										<p style="color: #fff;">{!! $product['product_description'] !!}</p>
										<a class="btn btn-secondary btn-block" href="{{ route('productDetails', $product['slug']) }}">View Detials</a>
									</div>
								</div>
							</div>
							<div class="product-bio">
								<h4>
									<a href="#">{{ $product['product_name'] }}</a>
								</h4>
								<p class="product-price">Rs. {{ $product['product_price'] }}</p>
							</div>
						</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="block gray no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content-box no-margin go-simple">
						<div class="mini-service-sec">
							<div class="row">
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa fa-paper-plane"></i>
										<div class="mini-service-info">
											<h3>Worldwide Delivery</h3>
											<p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
											<h3>Worldwide Delivery</h3>
											<p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa fa-medkit"></i>
										<div class="mini-service-info">
											<h3>Friendly Stuff</h3>
											<p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
											<h3>24/h Support</h3>
											<p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
							</div>
						</div><!-- Mini Service Sec -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
</main>
@endsection