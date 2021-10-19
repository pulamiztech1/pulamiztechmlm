@extends('layouts.frontLayouts.front_layout')
@section('content')
<main class="main-container">
	<section class="block no-padding">
		<div class="main-slider overlape">
			<div id="full-slider-wrapper">
				<div id="layerslider" style="width:100%;height:450px; ">
					<div class="ls-slide" data-ls="transition3d:all; timeshift:-1000; slidedelay: 7000;">
						<img  src="{{ asset('images/frontend_images/resource/main-slide3.jpg') }}" class="ls-bg" alt="Slide background"/>
						<div class="ls-slide" style=" font-size:45px; font-weight:900; top:175px; left:30px; text-transform:uppercase; color:#ffffff;" data-ls="easingin:easeOutBack;  delayin:2000; rotatexin:90; durationin:2000;">top brands 2016</div>
						<div class="ls-slide" style=" font-size:14px; top:230px; left:70px; color:#ffffff;" data-ls="easingin:easeOutExpo; delayin:2500; rotatexin:90; durationin:2000;">Hi,I need help creating a powerpoint presentation</div>
						<a href="#" title="" class="ls-slide bg-color" style="padding:11px 13px; color:#ffffff; border-radius:3px; font-family:Lato; font-size:13px; top:270px; left:135px;" data-ls="easingin:easeOutBack; delayin:2000; offsetxin:bottom; rotatexin:90; durationin:2000;">More Know</a>
						<a href="#" title="" class="ls-slide text-color border-color" style="padding:9px 13px; border-radius:3px; border:2px solid #ffffff; color: #ffffff;  font-size:13px; top:270px; left:235px;" data-ls="easingin:easeOutBack; delayin:2500; offsetxin:bottom; rotatexin:90; durationin:2000;">Buy Now</a>
					</div>
					<div class="ls-slide" data-ls="transition3d:all; timeshift:-1000; slidedelay: 7000;">
						<img  src="{{ asset('images/frontend_images/resource/main-slide2.jpg') }}" class="ls-bg" alt="Slide background"/>
						<i class="ls-slide fa fa-shopping-bag " style=" font-family:fontawesome; font-size:220px; color:#e9e9eb; top:100px; left:800px;" data-ls="easingin:easeOutBack; delayin:500; offsetxin:right; durationin:2000;"></i>
						<div class="ls-slide" style=" font-size:15px; font-weight:300; color:#333333; letter-spacing:3px; top:180px; font-style:italic; left:750px;" data-ls="easingin:easeOutBack; delayin:1000; offsetxin:top; scalexin:1.3; durationin:2000;">Hi,I need help Creating a Powerpoint </div>
						<h4 class="ls-slide" style="font-size:40px;  font-weight:900; top:205px; text-transform:uppercase; left:660px; color:#1c1c1c;" data-ls="easingin:easeOutElastic; offsetxin:-100px; rotatexin:90; delayin:1500; durationin:2000;">Amazing Online store</h4>
						<a href="#" title="" class="ls-slide bg-color" style="padding:11px 13px; color:#ffffff; border-radius:3px; font-family:Lato; font-size:13px; top:280px; left:817px;" data-ls="easingin:easeOutBack; delayin:2000; offsetxin:bottom; rotatexin:90; durationin:2000;">More Know</a>
						<a href="#" title="" class="ls-slide" style="padding:9px 13px; color:#333333; border-radius:3px; border:2px solid #555555; font-family:Lato; font-size:13px; top:280px; left:917px;" data-ls="easingin:easeOutBack; delayin:2500; offsetxin:bottom; rotatexin:90; durationin:2000;">Buy Now</a>
					</div>
					<div class="ls-slide" data-ls="transition3d:all; timeshift:-1000; slidedelay: 6000;">
						<img  src="{{ asset('images/frontend_images/resource/main-slide1.jpg') }}" class="ls-bg" alt="Slide background"/>
						<div class="ls-slde" style="color:#333333; font-family:lato; font-size:15px; font-weight:300; top:160px; left:50px; text-transform:uppercase;" data-ls="rotatexin:90; offsetxin:0; delayin:1000; easingin:easeOutElastic; fadein:false; fadeout:false; durationin:2000;">Great Collection</div>
						<div class="ls-slide" style=" font-size:40px; font-weight:900; top:180px; left:50px; text-transform:uppercase; color:#1c1c1c;" data-ls="rotateyin:45; offsetyin:100px; delayin:1500; easingin:easeOutExpo; durationin:2000;">top brands 2016</div>
						<div class="ls-slide bg-color" style=" top:225px; left:50px; font-size:13px; text-transform:uppercase; color:#ffffff; padding:5px 20px;" data-ls="offsetyin:left; easingin:easeOutElastic; delayin:2000; durationin:2000;">Smarter Shopping,Better Living!</div>
					</div>
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
				<div class="col-xs-12 col-sm-12 col-md-12 shop-filter">
					<ul class="list-inline">
						<li>
							<a class="active-filter" href="#" data-filter="*">All Products</a>
						</li>
						<li>
							<a href="#" data-filter=".filter-best">Best Selling</a>
						</li>
						<li>
							<a href="#" data-filter=".filter-featured">Featured</a>
						</li>
						<li>
							<a href="#" data-filter=".filter-sale">On Sale</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="shop-all" class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 product-item filter-best">
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
						<a href="#">CST/Berger</a>
						</h4>
						<p class="product-price">$68.00</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 product-item filter-sale">
					<div class="product-img">
						<img src="{{ asset('images/frontend_images/shop/index3_product2.png') }}" alt="product">
						<div class="product-sale">
							sale
						</div>
						<div class="product-hover">
							<div class="product-cart">
								<a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
							</div>
						</div>
					</div>
					<div class="product-bio">
						<h4>
						<a href="#">Titan Measures</a>
						</h4>
						<p class="product-price">
							<span>$40.00</span>
						$32.00</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 product-item filter-best">
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
						<a href="#">Charger/Radio</a>
						</h4>
						<p class="product-price">$180.00</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 product-item filter-featured">
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
						<a href="#">Plate Compactor</a>
						</h4>
						<p class="product-price">$230.00</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 product-item filter-best">
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
						<a href="#">Black Tape</a>
						</h4>
						<p class="product-price">$12.00</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 product-item filter-best filter-featured">
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
						<a href="#">ICS Concrete Saw</a>
						</h4>
						<p class="product-price">$40.00</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 product-item filter-featured">
					<div class="product-img">
						<img src="{{ asset('images/frontend_images/shop/index3_product7.png') }}" alt="product">
						<div class="product-new">
							new
						</div>
						<div class="product-hover">
							<div class="product-cart">
								<a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
							</div>
						</div>
					</div>
					<div class="product-bio">
						<h4>
						<a href="#">NorthStar Asphalt</a>
						</h4>
						<p class="product-price">$150.00</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 product-item filter-best">
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
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 text-center">
					<a class="btn btn-secondary" href="#">more products <i class="fa fa-plus ml-xs"></i></a>
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