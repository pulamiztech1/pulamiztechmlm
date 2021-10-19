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
                  <span class="bread-blod">Add New Member</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="basic-form-area mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sparkline12-list">
          <div class="sparkline12-hd">
            <div class="main-sparkline12-hd">
              <h1>Add New Member</h1>
            </div>
          </div>
          <hr>
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
          <div class="sparkline12-graph">
            <div class="basic-login-form-ad">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="all-form-element-inner">
                    <form action="{{ route('addNewMember') }}" method="post" enctype="multipart/form-data">@csrf                      
                      <input type="hidden" name="parent_id" id="parent_id">
                      <input type="hidden" name="sponser_id" id="sponser_id">
                      <input type="hidden" name="user_url" id="user_url">
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Full Name:</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="name" id="name" class="form-control"/>
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Email:</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="email" name="email" id="email" class="form-control"/>
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Username:</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="username" id="username" class="form-control"/>
                          </div>
                        </div>
                      </div>                      
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Password:</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="password" class="form-control" id="member-password" name="password" />
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