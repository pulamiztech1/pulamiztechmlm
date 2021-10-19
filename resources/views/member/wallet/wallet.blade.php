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
									<span class="bread-blod">View Members</span>
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
						<h1>Projects <span class="table-project-n">Data</span> Table</h1>
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
									<th data-field="id">ID</th>
									<th data-field="name">Username</th>
									<th data-field="profile_image">Profile<br>Image</th>
									<th data-field="business_plan">Business<br>Plan</th>
									<th data-field="email">Email</th>
									<th data-field="sponserID">Sponser ID</th>
									<th data-field="status">Status</th>
									<th data-field="action">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($myUsers as $user => $values)
								<tr>
									<td>{{ $values['id'] }}</td>
									<td>{{ $values['name'] }}</td>
									<td>
									<?php $profileImagePath = "images/backend_images/member_profile/".$values->profile_image; ?>
					                    @if(!empty($values->profile_image) && file_exists($profileImagePath))
					                    <img src="{{ asset('images/backend_images/member_profile/'.$values->profile_image) }}" style="width: 60px;">
					                    @else
					                    <img src="{{ asset('images/services/no-image.png') }}" style="width: 60px;">
					                    @endif
					                </td>
									<td>{{ $values['business_plan'] }}</td>
									<td>{{ $values['email'] }}</td>
									<td>{{ $values['sponser_id'] }}</td>
									<td>{{ $values['status'] }}</td>
									<td>
										<a href="{{ route('viewMemberDetails', $values['own_id']) }}" class="btn btn-success btn-sm"><i class="fas fa-eye" title="View Member Details" style="color: #fff;"></i></a>
										<a href="javascript:void(0)" class="confirmDelete btn btn-danger btn-sm" record="user-user" recordid="{{ $values->id }}"><i class="fas fa-trash" title="Delete Admin User" style="color: #fff;"></i></a>
									</td>									
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