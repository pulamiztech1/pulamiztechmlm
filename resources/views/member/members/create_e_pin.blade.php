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
                  @if ($e_pin_exist)
                     <span class="bread-blod">Change Transaction Pin</span>
                  @else
                     <span class="bread-blod">Create Transaction Pin</span>
                  @endif
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


<div class="basic-form-area mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sparkline12-list">
          <div class="sparkline12-hd">
            <div class="main-sparkline12-hd">
                @if($e_pin_exist)
                  <h1>Change Transaction Pin</h1>
                @else
                  <h1>Create Transaction Pin</h1>
              @endif
            </div>
          </div>
          @if ($errors->any())
           <div class="alert alert-danger">
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
                    @if($e_pin_exist)
                        <form action="{{route('updatePins')}}" method="POST">
                            @csrf
                         
                            <div class="form-group-inner">
                            
                            <div class="form-group-inner mt-5">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                   <label class="login2 pull-right pull-right-pro">Current Transaction Pin</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <input type="password" id="pin" name="current_pin" class="form-control password_errors" />
                                </div>
                            </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <label class="login2 pull-right pull-right-pro">New Transaction Pin</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <input type="password" id="confirmed" name="new_pin" class="form-control password_errors" />
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <label class="login2 pull-right pull-right-pro">Confirm Transaction Pin</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <input type="password" id="confirmed" name="confirmed" class="form-control password_errors" />
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit">Change Transaction Pin</button>
                        </form>
                    @else
                    <form action="{{route('RequestNewPins')}}" method="POST">
                        @csrf
                        <div class="form-group-inner">
                    
                        </div> 
                        <div class="form-group-inner">
                         
                        <div class="form-group-inner mt-5">
                          <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <label class="login2 pull-right pull-right-pro">Transaction Pin</label>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                              <input type="password" id="pin" name="pin" class="form-control password_errors" />
                            </div>
                          </div>
                        </div>
                        <div class="form-group-inner">
                          <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <label class="login2 pull-right pull-right-pro">Confirm Transaction Pin</label>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                              <input type="password" id="confirmed" name="confirmed" class="form-control password_errors" />
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit">Set Transaction Pin</button>
                      </form>
                    @endif  
                    
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