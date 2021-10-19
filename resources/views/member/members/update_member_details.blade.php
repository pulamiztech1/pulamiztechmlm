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
        <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
          <div class="sparkline10-hd">
            <div class="main-sparkline10-hd">
              <h1>Update your details</h1>
            </div>
          </div>
          <form action="{{ route('updateMemberDetails') }}" method="post" enctype="multipart/form-data">@csrf
            <div class="sparkline10-graph">
              <div class="input-knob-dial-wrap">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="chosen-select-single mg-b-20">
                      <label>Name</label>
                      <input type="text" name="name" id="name" class="form-control" value="{{ Auth::guard('agent')->user()->name }}" readonly="" />
                    </div>
                    <div class="chosen-select-single mg-b-20">
                      <label>Email</label>
                      <input type="email" name="email" id="email" class="form-control" value="{{ Auth::guard('agent')->user()->email }}" readonly="" />
                    </div>
                    <div class="chosen-select-single mg-b-20">
                      <label>Referrer</label>
                      <input type="text" name="referrer" id="referrer" class="form-control" value="{{ Auth::guard('agent')->user()->referrer }}" readonly="" />
                    </div>
                    <div class="chosen-select-single mg-b-20">
                      <label>Parent ID</label>
                      <input type="text" name="parent_id" id="parent_id" class="form-control" value="{{ Auth::guard('agent')->user()->parent_id }}" readonly="" />
                    </div>
                    <div class="chosen-select-single mg-b-20">
                      <label>Sponser ID</label>
                      <input type="text" name="sponser_id" id="sponser_id" class="form-control" value="{{ Auth::guard('agent')->user()->sponser_id }}" readonly="" />
                    </div>
                    <div class="chosen-select-single mg-b-20">
                      <label>Own ID</label>
                      <input type="text" name="own_id" id="own_id" class="form-control" value="{{ Auth::guard('agent')->user()->own_id }}" readonly="" />
                    </div>
                    <div class="chosen-select-single mg-b-20">
                      <label>Username</label>
                      <input type="text" name="username" id="username" class="form-control" value="{{ Auth::guard('agent')->user()->username }}" />
                    </div>
                    <div class="chosen-select-single mg-b-20">
                      <label>Mobile</label>
                      <input type="text" name="mobile" id="mobile" class="form-control" value="{{ Auth::guard('agent')->user()->mobile }}" />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group data-custom-pick" id="data_1">
                      <label>Date of Birth</label>
                      <div class="sparkline16-graph">
                        <div class="date-picker-inner">
                          <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ Auth::guard('agent')->user()->date_of_birth }}" autocomplete="none">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="chosen-select-single mg-b-20">
                      <label>Gender</label>
                      <select name="gender" id="gender" data-placeholder="Choose a Gender..." class="chosen-select" tabindex="-1">
                        <option value="">-- Select Gender --</option>
                        <option value="Female" @if(Auth::guard('agent')->user()->gender == "Female") selected @endif>Female</option>
                        <option value="Male" @if(Auth::guard('agent')->user()->gender == "Male") selected @endif>Male</option>
                        <option value="Other" @if(Auth::guard('agent')->user()->gender == "Other") selected @endif>Other</option>
                      </select>
                    </div>
                    <div class="chosen-select-single mg-b-20">
                      <label>State</label>
                      <input type="text" name="state" id="state" class="form-control" value="{{ Auth::guard('agent')->user()->state }}" />
                    </div>
                    <div class="chosen-select-single mg-b-20">
                      <label>City</label>
                      <input type="text" name="city" id="city" class="form-control" value="{{ Auth::guard('agent')->user()->city }}" />
                    </div>
                    <div class="chosen-select-single mg-b-20">
                      <label>Address</label>
                      <input type="text" name="address" id="address" class="form-control" value="{{ Auth::guard('agent')->user()->address }}" />
                    </div>
                    <div class="chosen-select-single mg-b-20">
                      <label>Profile Image</label>
                        <input type="file" class="form-control" name="profile_image" id="profile_image">
                        <input type="hidden" class="form-control" name="current_user_profile" value="{{ asset('images/backend_images/member_profile/'.Auth::guard('agent')->user()->profile_image) }}">
                          @if(!empty(Auth::guard('agent')->user()->profile_image))
                          <a target="_blank" href="
                              {{ url('images/backend_images/member_profile/'.Auth::guard('agent')->user()->profile_image) }}">View Image</a> | <a href="javascript:void(0)" record="member-profile-image" recordid="{{ Auth::guard('agent')->user()->id }}" class="confirmDelete">Delete Image</a>
                            <input type="hidden" name="current_user_profile" value="{{ Auth::guard('agent')->user()->profile_image }}">
                          @endif
                    </div>
                    <div class="chosen-select-single mg-b-20">
                      <label>User URL</label>
                      <input type="text" name="user_url" id="user_url" class="form-control" value="{{ Auth::guard('agent')->user()->user_url }}" />
                    </div>
                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                      <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection