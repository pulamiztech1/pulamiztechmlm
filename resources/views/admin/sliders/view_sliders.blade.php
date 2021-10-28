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
									<span class="bread-blod">View Products</span>
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
					<a href="{{ route('addEditSlider') }}" class="btn btn-sm btn-info pull-right login-submit-cs">Add Slider</a>
					<div class="main-sparkline13-hd">
						<h1>Products <span class="table-project-n">Data</span> Table</h1>
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
									<th data-field="slider_image">Slider Image</th>
									<th data-field="slider_text1">Slider Text1</th>
									<th data-field="slider_text2">Slider Text2</th>
									<th data-field="slider_text3">Slider Text3</th>
									<th data-field="status">Status</th>
									<th data-field="action">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($sliders as $slider)
								<tr>
									<td>{{ $slider['id'] }}</td>
									<td>
									<?php $sliderImagePath = "images/backend_images/sliders/".$slider->slider_image; ?>
					                    @if(!empty($slider->slider_image) && file_exists($sliderImagePath))
					                    <img src="{{ asset('images/backend_images/sliders/'.$slider->slider_image) }}" style="width: 60px;">
					                    @else
					                    <img src="{{ asset('images/backend_images/no-image.png') }}" style="width: 60px;">
					                    @endif
					                </td>
									<td>{{ $slider['slider_text_one'] }}</td>
									<td>{{ $slider['slider_text_two'] }}</td>
									<td>{{ $slider['slider_text_three'] }}</td>
									<td>
										@if($slider->status==1)
				                      		<a class="updateSliderStatus" id="slider-{{ $slider->id }}" slider_id="{{ $slider->id }}" href="javascript:void(0)"><i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i></a>

				                      	@else
				                      		<a class="updateSliderStatus" id="slider-{{ $slider->id }}" slider_id="{{ $slider->id }}" href="javascript:void(0)"><i class="fas fa-toggle-off" aria-hidden="true" status="Inactive"></i></a>
				                      	@endif
				                  	</td>
									<td>
										<a href="{{ route('addEditSlider',$slider->id) }}" class="btn btn-success btn-sm" title="Add/Edit Slider"><i class="fas fa-edit" style="color: #fff;"></i></a>
                        				&nbsp;
										<a href="javascript:void(0)" class="confirmDelete btn btn-danger btn-sm" record="slider" recordid="{{ $slider->id }}"><i class="fas fa-trash" title="Delete Slider" style="color: #fff;"></i></a>

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