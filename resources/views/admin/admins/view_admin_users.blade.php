@extends('layouts.adminLayouts.admin_layout')
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
									<span class="bread-blod">View Admin Users</span>
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
									<th data-field="profile_image">Profile Image</th>
									<th data-field="phone">Mobile</th>
									<th data-field="type">Type</th>
									<th data-field="date">Email</th>
									<th data-field="status">Status</th>
									<th data-field="action">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($admins as $admin)
								<tr>
									<td>{{ $admin['id'] }}</td>
									<td>{{ $admin['name'] }}</td>
									<td>
									<?php $profileImagePath = "images/backend_images/admin_profile/".$admin->profile_image; ?>
					                    @if(!empty($admin->profile_image) && file_exists($profileImagePath))
					                    <img src="{{ asset('images/backend_images/admin_profile/'.$admin->profile_image) }}" style="width: 60px;">
					                    @else
					                    <img src="{{ asset('images/backend_images/no-profile.jpg') }}" style="width: 60px;">
					                    @endif
					                </td>
									<td>{{ $admin['mobile'] }}</td>
									<td>{{ $admin['type'] }}</td>
									<td>{{ $admin['email'] }}</td>
									<td>
										@if($admin->status==1)
				                      		<a class="updateAdminUserStatus" id="admin-{{ $admin->id }}" admin_id="{{ $admin->id }}" href="javascript:void(0)"><i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i></a>

				                      	@else
				                      		<a class="updateAdminUserStatus" id="admin-{{ $admin->id }}" admin_id="{{ $admin->id }}" href="javascript:void(0)"><i class="fas fa-toggle-off" aria-hidden="true" status="Inactive"></i></a>
				                      	@endif
				                  	</td>
									<td>
										<a href="javascript:void(0)" class="confirmDelete btn btn-danger btn-sm" record="admin-user" recordid="{{ $admin->id }}"><i class="fas fa-trash" title="Delete Admin User" style="color: #fff;"></i></a>
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