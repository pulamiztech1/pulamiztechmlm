<div class="col-md-12">	
	<table class="table cart-table">
		<thead>
			<tr>
				<th class="table-title">Product Name</th>
				<th class="table-title">Product Code</th>
				<th class="table-title">Unit Price</th>
				<th class="table-title">Quantity</th>
				<th class="table-title">SubTotal</th>
				<th>
					<span class="close-button disabled"></span></th>
			</tr>
		</thead>
		<tbody>
			<?php $total_price = 0; ?>
			@foreach($userCartItems as $item)
			<tr>
				<td class="product-name-col">
					<figure>
						<a href="#"><img class="img-responsive" src="{{ asset('images/backend_images/products/'.$item['product']['product_image']) }}" alt="White linen sheer dress"></a>
					</figure>
					<h2 class="product-name"><a href="#">{{ $item['product']['product_name'] }}</a></h2>
					<ul>
						<li>Color: White</li>
						<li>Size: SM</li>
					</ul>
				</td>
				<td class="product-code">{{ $item['product']['product_code'] }}</td>
				<td class="product-price-col">
					<span class="product-price-special">Rs. {{ $item['product']['product_price']}}</span>
				</td>
				<td>
					<div class="custom-quantity-input">
						<input type="text" name="quantity" value="{{ $item['quantity']}}">
					</div>
				</td>
				<td class="product-total-col">
					<span class="product-price-special">Rs. {{ $item['quantity'] * $item['product']['product_price'] }}</span>
				</td>
				<td>
					<a href="#" class="close-button btnItemDelete" data-cartid="{{ $item['id'] }}"><i class="fa fa-times"></i></a>
				</td>
			</tr>
			<?php $total_price = $total_price + ($item['quantity'] * $item['product']['product_price']); ?>
			@endforeach
		</tbody>
	</table>
	<div class="mt-30"></div>
		<div class="row">
			<div class="col-md-8">
				<div class="tab-container left clearfix">
					
					<div class="tab-content">
						
					</div>
					<div class="mt-30"></div>
						<a href="#" class="btn btn-custom-6 btn-lger min-width-lg">Continue Shopping</a>
				</div>
			</div>
				<div class="mt-30 visible-sm visible-xs clearfix"></div>
					<div class="col-md-4">
						<table class="table total-table">
							<tbody>
								<tr>
									<td class="total-table-title">Subtotal:</td>
									<td>Rs. {{ $total_price }}</td>
								</tr>
								<tr>
									<td class="total-table-title">TAX (0%):</td>
									<td>$0.00</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td>Total:</td>
									<td>Rs. {{ $total_price }}</td>
								</tr>
							</tfoot>
						</table>
					<div class="mt-30"></div>
						<div class="text-right"><a href="#" class="btn btn-custom-6 btn-lger min-width-sm">Checkout</a>
					</div>
				</div>
			</div>