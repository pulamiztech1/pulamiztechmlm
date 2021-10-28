@extends('layouts.frontLayouts.front_layout')
@section('content')
<main class="main-container">
	<section class="block no-padding">
		<div class="main-slider overlape">
			<div id="full-slider-wrapper">
				<div id="layerslider" style="width:100%;height:450px; ">
					@foreach($sliders as $slider)
					<div class="ls-slide" data-ls="transition3d:all; timeshift:-1000; slidedelay: 7000;">
						<img  src="{{ asset('images/backend_images/sliders/'.$slider['slider_image']) }}" class="ls-bg" alt="Slide background"/>
						<div class="ls-slide" style=" font-size:45px; font-weight:900; top:175px; left:30px; text-transform:uppercase; color:#ffffff;" data-ls="easingin:easeOutBack;  delayin:2000; rotatexin:90; durationin:2000;">{{ $slider['slider_text_one'] }}</div>
						<div class="ls-slide" style=" font-size:14px; top:230px; left:70px; color:#ffffff;" data-ls="easingin:easeOutExpo; delayin:2500; rotatexin:90; durationin:2000;">{{ $slider['slider_text_two'] }}</div>						
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<section class="block gray no-padding">
		<div class="lookcare-slider-bottom-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 col-xs-6 look-offer">
						<div class="offer-details">
							<h3>Sale up to 40%</h3>
							<p>Vivamus consequat, felis at aliquam elementum</p>
							<a href="#" class="btn btn-min btn-solid">Take a Look</a>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 helix-product clearfix">
						<div class="img-wrapper">
							<img src="{{ asset('images/frontend_images/shop/img-7.jpg') }}" alt="" class="img-responsive">
						</div>
						<div class="product-detail">
							<a href="#"><h3>Deluxe Belt</h3></a>
							<h4>$8.99</h4>
							<a href="#" class="link-btn">Shop Now<i class="ion-arrow-right-c"></i></a>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 helix-product clearfix">
						<div class="img-wrapper">
							<img src="{{ asset('images/frontend_images/shop/img-9.jpg') }}" alt="" class="img-responsive">
						</div>
						<div class="product-detail">
							<a href="#"><h3>Ball</h3></a>
							<h4>$29.00</h4>
							<a href="#" class="link-btn">Shop Now<i class="ion-arrow-right-c"></i></a>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 helix-product clearfix">
						<div class="img-wrapper">
							<img src="{{ asset('images/frontend_images/shop/img-11.jpg') }}" alt="" class="img-responsive">
						</div>
						<div class="product-detail">
							<a href="#"><h3>Pilates Adjustable</h3></a>
							<h4>$29.00</h4>
							<a href="#" class="link-btn">Shop Now<i class="ion-arrow-right-c"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="shop" class="shop-4 pt-0">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="block-heading-two">
						<h3><span>Our Products</span></h3>
					</div>
					
				</div>
			</div>
			<div id="shop-all" class="row">
				@foreach($products as $product)
				<div class="col-xs-12 col-sm-6 col-md-3 product-item filter-best">
					<div class="product-img">
						<img src="{{ asset('images/backend_images/products/'.$product['product_image'] )}}" alt="product">
						<div class="product-hover">
							<div class="product-cart">
								<p style="color: #fff;">{!! $product['product_description'] !!}</p>
								<a class="btn btn-secondary btn-block" href="{{ route('addToCart') }}">Add To Cart</a>
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
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 text-center">
					<a class="btn btn-secondary" href="{{ route('productsListing')}}">more products <i class="fa fa-plus ml-xs"></i></a>
				</div>
			</div>
		</div>
	</section>
	<section id="recent-product">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="recent-items">
						<div class="block-heading-two">
							<h3><span>Recommended Items</span></h3>
						</div>
						<div class="owl-carousel" data-items="5" data-auto-play="true" data-pagination="true" data-single-item="false">
							<div class="owl-content">
								<div class=" product-item filter-best">
									<div class="product-img">
										<img src="{{ asset('images/frontend_images/shop/index3_product1.png') }}" alt="product">
										<div class="product-hover">
											<div class="product-cart">
												<a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
											</div>
										</div>
									</div>
									<div class="product-bio">
										<h4>
										<a href="#">Keson Fiberglass</a>
										</h4>
										<p class="product-price">$550.00</p>
									</div>
								</div>
							</div>
							<div class="owl-content">
								<div class="product-item filter-best">
									<div class="product-img">
										<img src="{{ asset('images/frontend_images/shop/index3_product2.png') }}" alt="product">
										<div class="product-hover">
											<div class="product-cart">
												<a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
											</div>
										</div>
									</div>
									<div class="product-bio">
										<h4>
										<a href="#">Keson Fiberglass</a>
										</h4>
										<p class="product-price">$550.00</p>
									</div>
								</div>
							</div>
							<div class="owl-content">
								<div class="product-item filter-best">
									<div class="product-img">
										<img src="{{ asset('images/frontend_images/shop/index3_product3.png') }}" alt="product">
										<div class="product-hover">
											<div class="product-cart">
												<a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
											</div>
										</div>
									</div>
									<div class="product-bio">
										<h4>
										<a href="#">Keson Fiberglass</a>
										</h4>
										<p class="product-price">$550.00</p>
									</div>
								</div>
							</div>
							<div class="owl-content">
								<div class="product-item filter-best">
									<div class="product-img">
										<img src="{{ asset('images/frontend_images/shop/index3_product4.png') }}" alt="product">
										<div class="product-hover">
											<div class="product-cart">
												<a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
											</div>
										</div>
									</div>
									<div class="product-bio">
										<h4>
										<a href="#">Keson Fiberglass</a>
										</h4>
										<p class="product-price">$550.00</p>
									</div>
								</div>
							</div>
							<div class="owl-content">
								<div class="product-item filter-best">
									<div class="product-img">
										<img src="{{ asset('images/frontend_images/shop/index3_product5.png') }}" alt="product">
										<div class="product-hover">
											<div class="product-cart">
												<a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
											</div>
										</div>
									</div>
									<div class="product-bio">
										<h4>
										<a href="#">Keson Fiberglass</a>
										</h4>
										<p class="product-price">$550.00</p>
									</div>
								</div>
							</div>
							<div class="owl-content">
								<div class="product-item filter-best">
									<div class="product-img">
										<img src="{{ asset('images/frontend_images/shop/index3_product6.png') }}" alt="product">
										<div class="product-hover">
											<div class="product-cart">
												<a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
											</div>
										</div>
									</div>
									<div class="product-bio">
										<h4>
										<a href="#">Keson Fiberglass</a>
										</h4>
										<p class="product-price">$550.00</p>
									</div>
								</div>
							</div>
							<div class="owl-content">
								<div class="product-item filter-best">
									<div class="product-img">
										<img src="{{ asset('images/frontend_images/shop/index3_product7.png') }}" alt="product">
										<div class="product-hover">
											<div class="product-cart">
												<a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
											</div>
										</div>
									</div>
									<div class="product-bio">
										<h4>
										<a href="#">Keson Fiberglass</a>
										</h4>
										<p class="product-price">$550.00</p>
									</div>
								</div>
							</div>
							<div class="owl-content">
								<div class="product-item filter-best">
									<div class="product-img">
										<img src="{{ asset('images/frontend_images/shop/index3_product8.png') }}" alt="product">
										<div class="product-hover">
											<div class="product-cart">
												<a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
											</div>
										</div>
									</div>
									<div class="product-bio">
										<h4>
										<a href="#">Keson Fiberglass</a>
										</h4>
										<p class="product-price">$550.00</p>
									</div>
								</div>
							</div>
							<div class="owl-content">
								<div class="product-item filter-best">
									<div class="product-img">
										<img src="{{ asset('images/frontend_images/shop/index3_product1.png') }}" alt="product">
										<div class="product-hover">
											<div class="product-cart">
												<a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
											</div>
										</div>
									</div>
									<div class="product-bio">
										<h4>
										<a href="#">Keson Fiberglass</a>
										</h4>
										<p class="product-price">$550.00</p>
									</div>
								</div>
							</div>
							<div class="owl-content">
								<div class="product-item filter-best">
									<div class="product-img">
										<img src="{{ asset('images/frontend_images/shop/index3_product2.png') }}" alt="product">
										<div class="product-hover">
											<div class="product-cart">
												<a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
											</div>
										</div>
									</div>
									<div class="product-bio">
										<h4>
										<a href="#">Keson Fiberglass</a>
										</h4>
										<p class="product-price">$550.00</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="block parallax-block">
		<div class="layer">
			<div data-velocity="-.3" style="background: url(images/frontend_images/resource/main-slide2.jpg') }} repeat scroll 50% 422.28px transparent;" class="parallax no-repeat"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="lookbook-product">
							<h2><a href="#" title="">Collection 2016 </a></h2>
							<ul class="simple-cat-style">
								<li><a href="#" title="">Dresses</a></li>
								<li><a href="#" title="">Coats & Jackets</a></li>
								<li><a href="#" title="">Jeans</a></li>
							</ul>
							<a href="#" title="">read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="Clients" class="light-wrapper">
		<div class="container inner">
			<div class="row">
				<div class="Last-items-shop col-md-3">
					<div class="block-heading-two block-heading-three">
						<h3><span>Special Offer</span></h3>
					</div>
					<div class="Last-post">
						<ul class="shop-res-items">
							<li>
								<a href="#"><img src="{{ asset('images/frontend_images/small/50.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$28.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('images/frontend_images/small/51.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$40.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('images/frontend_images/small/52.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$150.00</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="Last-items-shop col-md-3">
					<div class="block-heading-two block-heading-three">
						<h3><span>Best Sellers</span></h3>
					</div>
					<div class="Last-post">
						<ul class="shop-res-items">
							<li>
								<a href="#"><img src="{{ asset('images/frontend_images/small/53.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$28.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('images/frontend_images/small/54.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$40.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('images/frontend_images/small/55.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$150.00</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="Last-items-shop col-md-3">
					<div class="block-heading-two block-heading-three">
						<h3><span>Featured</span></h3>
					</div>
					<div class="Last-post">
						<ul class="shop-res-items">
							<li>
								<a href="#"><img src="{{ asset('images/frontend_images/small/56.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$28.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('images/frontend_images/small/57.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$40.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('images/frontend_images/small/55.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$150.00</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="Last-items-shop col-md-3">
					<div class="block-heading-two block-heading-three">
						<h3><span>Sales</span></h3>
					</div>
					<div class="Last-post">
						<ul class="shop-res-items">
							<li>
								<a href="#"><img src="{{ asset('images/frontend_images/small/55.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$28.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('images/frontend_images/small/58.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$40.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('images/frontend_images/small/50.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$150.00</span>
							</li>
						</ul>
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
									</div>
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
											<h3>Worldwide Delivery</h3>
											<p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa fa-medkit"></i>
										<div class="mini-service-info">
											<h3>Friendly Stuff</h3>
											<p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
											<h3>24/h Support</h3>
											<p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
</main>
@endsection