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
                  <span class="bread-blod">Add Edit Product Form</span>
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
              <h1>Add Edit Product Form</h1>
            </div>
          </div>
          <div class="sparkline12-graph">
            <div class="basic-login-form-ad">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="all-form-element-inner">
                    <form method="post" @if(empty($productdata['id'])) action="{{ route('addEditProduct') }}" @else action="{{ route('addEditProduct',$productdata['id']) }} "@endif enctype="multipart/form-data">@csrf
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Product Name</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="product_name" name="product_name" placeholder="Product name" @if(!empty($productdata['product_name'])) value="{{ $productdata['product_name'] }}" @else value="{{ old('product_name') }}" @endif class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Product Code</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="product_code" name="product_code" placeholder="Product code" @if(!empty($productdata['product_code'])) value="{{ $productdata['product_code'] }}" @else value="{{ old('product_code') }}" @endif class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Product Cost</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="product_cost" name="product_cost" placeholder="Product cost" @if(!empty($productdata['product_cost'])) value="{{ $productdata['product_cost'] }}" @else value="{{ old('product_cost') }}" @endif class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Product Price</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="product_price" name="product_price" placeholder="Product price" @if(!empty($productdata['product_price'])) value="{{ $productdata['product_price'] }}" @else value="{{ old('product_price') }}" @endif class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Product Description</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <div class="tinymce-single responsive-mg-b-30">
                                <textarea id="summernote1" name="product_description">@if(!empty($productdata['product_description'])) {{ $productdata['product_description'] }} @else {{ old('product_description') }}" @endif</textarea> 
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Product Image</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="product_image" id="product_image">
                            @if(!empty($productdata['product_image']))
                              <img style="width: 50px;" src="{{ asset('images/backend_images/products/'.$productdata['product_image']) }}">
                              &nbsp;<a href="javascript:void(0)" record="product-image" recordid="{{ $productdata['id'] }}" class="confirmDelete">Delete Image</a>
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