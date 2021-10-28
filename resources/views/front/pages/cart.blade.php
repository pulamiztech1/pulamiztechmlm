@extends('layouts.frontLayouts.front_layout')
@section('content')
<!-- start main content -->
<main class="main-container">
<!-- shopping cart content -->
<section class="shopping-cart-area">
	<!-- Begin cart -->
	<div class="ld-subpage-content">

		<div class="ld-cart">

			<!-- Begin cart section -->
			<section class="ld-cart-section ptb-50">

				<div class="container">
					<div class="row">
						<div id="AppendCartItems">
							@include('front.pages.cart_item')
						</div>
					</div>
				</div>

			</section>
		</div>
	</div>
</section>
</main>
@endsection