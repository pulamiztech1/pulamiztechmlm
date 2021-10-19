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
                  <span class="bread-blod">Update Details</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@if(Session::has('success_message')) 
<div class="alert alert-success alert-success-style1">  
  <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
  <span class="icon-sc-cl" aria-hidden="true">&times;</span>
  </button>
  <i class="fa fa-check edu-checked-pro admin-check-pro" aria-hidden="true"></i>
  <p>{{ Session::get('success_message') }}</p>
</div>
@endif
@if(Session::has('error_message'))
<div class="alert alert-warning alert-success-style3">
  <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
  <span class="icon-sc-cl" aria-hidden="true">&times;</span>
  </button>
  <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro" aria-hidden="true"></i>
  <p>{{ Session::get('error_message') }}</p>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger" style="margin-top: 10px;">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="basic-form-area mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sparkline12-list">
          <div class="sparkline12-hd">
            <div class="main-sparkline12-hd">
              <h1>Update Your Profile</h1>
            </div>
          </div>
          <div class="sparkline12-graph">
            <div class="basic-login-form-ad">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="all-form-element-inner">
                    <form action="{{ route('updateAdminDetails') }}" method="post" enctype="multipart/form-data">@csrf
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Admin Name:</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="name" id="name" class="form-control" value="{{ Auth::guard('admin')->user()->name }}" readonly="" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Email:</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="email" class="form-control" value="{{ Auth::guard('admin')->user()->email }}" readonly/>
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Type:</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="type" name="type" class="form-control" value="{{ Auth::guard('admin')->user()->type }}" readonly/>
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Mobile No.:</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->mobile }}" id="mobile" name="mobile" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">User Profile:</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="profile_image" id="profile_image">
                            <input type="hidden" class="form-control" name="current_admin_image" value="{{ asset('images/backend_images/admin_profile/'.Auth::guard('admin')->user()->profile_image) }}">
                            @if(!empty(Auth::guard('admin')->user()->profile_image))
                            <a target="_blank" href="
                              {{ url('images/backend_images/admin_profile/'.Auth::guard('admin')->user()->profile_image) }}">View Image</a> | <a href="javascript:void(0)" record="admin-profile-image" recordid="{{ Auth::guard('admin')->user()->id }}" class="confirmDelete">Delete Image</a>
                              <input type="hidden" name="current_admin_image" value="{{ Auth::guard('admin')->user()->profile_image }}">
                              @endif
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection