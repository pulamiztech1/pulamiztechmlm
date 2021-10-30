@extends('layouts.memberLayouts.member_layout')
@section('content')
<div class="breadcome-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcome-list">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="breadcome-heading">
								<form role="search" class="sr-input-func">
									<input type="text" placeholder="Search..." class="search-int form-control">
									<a href="#"><i class="fa fa-search"></i></a>
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<ul class="breadcome-menu">
								<li><a href="#">Home</a>
									<span class="bread-slash">/</span>
								</li>
								<li>
									<span class="bread-blod">Transaction History</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div>
</div>
<div class="data-table-area mg-b-15">
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="sparkline13-list">
				<div class="sparkline13-hd">
					<div class="main-sparkline13-hd">
						<h1>Transaction <span class="table-project-n">History</span> Table</h1>
					</div>
				</div>
				<div class="sparkline13-graph">
					<div class="datatable-dashv1-list custom-datatable-overright">
						<div id="toolbar">
							<select class="form-control dt-tb">
								<option value="">Export Basic</option>
								<option value="all">Export All</option>
								<option value="selected">Export Selected</option>
							</select>
						</div>
						<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
							data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
							<thead>
									<tr>
										<th data-field="id">SN</th>
										<th data-field="name">Debit/Credit</th>
										<th data-field="business_plan">Amount</th>
										<th data-field="email">Description</th>
										<th data-field="sponserID">Date</th>
									</tr>
							</thead>
							<tbody>
								@foreach ($user->transaction_histories as $transaction)
									
									<tr>
										<td>{{$loop->index+1}}</td>
										<td>
											@if ($transaction->debit_credit=='debit')
												<div class="bg-danger rounded text-white text-center">debit</div>
											@else
											    <div class="bg-success rounded text-white text-center">credit</div>
											@endif
										</td>
										<td>Rs. {{$transaction->balance}}</td>
										<td>{{$transaction->description}}</td>
										<td>{{$transaction->created_at}}<br/>{{$transaction->created_at->diffForHumans()}}</td>
																			
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection