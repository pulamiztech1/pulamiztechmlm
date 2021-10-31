<header>
	<div class="top-bar">
		<div class="container">
			<div class="tb-contact pull-left">
				<i class="fa fa-envelope color"></i> &nbsp; <a href="mailto:contact@matrixmlm.com">contact@matrixmlm.com</a>
				&nbsp;&nbsp;
				<i class="fa fa-phone color"></i> &nbsp; +977-98----------				
			</div>
			<!-- Shopping kart starts -->
			<div class="tb-shopping-cart pull-right">
				<!-- Link with badge -->
				<a href="#" class="btn btn-white btn-xs b-dropdown"><i class="fa fa-shopping-cart"></i> <i class="fa fa-angle-down color"></i> <span class="badge badge-color">{{ totalCartItems() }}</span></a>
				<!-- Dropdown content with item details -->
				<div class="b-dropdown-block">
					<!-- Heading -->
					<h4><i class="fa fa-shopping-cart color"></i> Your Items</h4>
					<ul class="list-unstyled">
						<!-- Item 1 -->
						<li>
							<!-- Item image -->
							<div class="cart-img">
								<a href="#"><img src="img/ecommerce/view-cart/1.png" alt="" class="img-responsive" /></a>
							</div>
							<!-- Item heading and price -->
							<div class="cart-title">
								<h5><a href="#">Premium Quality Shirt</a></h5>
								<!-- Item price -->
								<span class="label label-color label-sm">$1,90</span>
							</div>
							<div class="clearfix"></div>
						</li>
						<!-- Item 2 -->
						<li>
							<div class="cart-img">
								<a href="#"><img src="img/ecommerce/view-cart/2.png" alt="" class="img-responsive" /></a>
							</div>
							<div class="cart-title">
								<h5><a href="#">Premium Quality Shirt</a></h5>
								<span class="label label-color label-sm">$1,20</span>
							</div>
							<div class="clearfix"></div>
						</li>
					</ul>
					<a href="{{ route('cart') }}" class="btn btn-white btn-sm">View Cart</a> &nbsp; <a href="#" class="btn btn-color btn-sm">Checkout</a>
				</div>
			</div>
			<!-- Shopping kart ends -->
			<div class="tb-shopping-cart pull-right">
				<a href="{{ route('memberLogin') }}"><i class="fas fa-sign-in-alt"></i> <span class="btn btn-success btn-sm">Login</span></a>
				<a href="{{ route('memberRegister') }}"><i class="fas fa-sign-in-alt"></i> <span class="btn btn-info btn-sm">Register</span></a>
			</div>
			<div class="tb-language dropdown pull-right">
				<a href="#" data-target="#" data-toggle="dropdown"><i class="fa fa-globe"></i> English <i class="fa fa-angle-down color"></i></a>
				<ul class="dropdown-menu dropdown-mini" role="menu">
					<li><a href="#">Germany</a></li>
					<li><a href="#">France</a></li>
					<li><a href="#">Brazil</a></li>
				</ul>
			</div>
			<div class="tb-search pull-left">
				<a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
				<div class="b-dropdown-block">
					<form>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Type Something">
							<span class="input-group-btn">
								<button class="btn btn-color" type="button">Search</button>
							</span>
						</div>
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="header-1">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="logo">
						<h1><a href="/"><i class="fa fa-bookmark-o"></i> Magic Market</a></h1>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-2 col-sm-5 col-sm-offset-3 hidden-xs">
					<div class="header-search">
						<form>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Type Something">
								<span class="input-group-btn">
									<button class="btn btn-color" type="button">Search</button>
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="navi">
			<div class="container">
				<div class="navy">
					<ul>
						<li><a href="{{ route('index') }}">Home</a></li>
						<li><a href="{{ route('productsListing') }}">Shop</a></li>					
						<li><a href="{{ route('productsListing') }}">About Us</a></li>					
						<li><a href="#">Galleries</a></li>					
						<li><a href="#">News</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>