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
                  <span class="bread-blod">Add Edit Slider Form</span>
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
              <h1>Add Edit Slider Form</h1>
            </div>
          </div>
          <div class="sparkline12-graph">
            <div class="basic-login-form-ad">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="all-form-element-inner">
                    <form action="{{ route('addEditSlider') }}" method="post" @if(empty($sliderdata['id'])) action="{{ route('addEditSlider') }}" @else action="{{ route('addEditSlider',$sliderdata['id']) }} "@endif enctype="multipart/form-data">@csrf
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Slider Image</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="slider_image" id="slider_image">
                            @if(!empty($sliderdata['slider_image']))
                              <img style="width: 50px;" src="{{ asset('images/backend_images/sliders/'.$sliderdata['slider_image']) }}">
                              &nbsp;<a href="javascript:void(0)" record="slider-image" recordid="{{ $sliderdata['id'] }}" class="confirmDelete" <?php /*href="{{ route('deletePropertyCategoryImage',$tourcategorydata['id']) }}"*/?>>Delete Image</a>
                            @endif
                          </div>
                        </div>
                      </div> 
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Slider Text One</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="slider_text_one" name="slider_text_one" placeholder="Slider text one" @if(!empty($sliderdata['slider_text_one'])) value="{{ $sliderdata['slider_text_one'] }}" @else value="{{ old('slider_text_one') }}" @endif class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Slider Text Two</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="slider_text_two" name="slider_text_two" placeholder="Slider text two" @if(!empty($sliderdata['slider_text_two'])) value="{{ $sliderdata['slider_text_two'] }}" @else value="{{ old('slider_text_two') }}" @endif class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Slider Text Three</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="slider_text_three" name="slider_text_three" placeholder="Slider text three" @if(!empty($sliderdata['slider_text_three'])) value="{{ $sliderdata['slider_text_three'] }}" @else value="{{ old('slider_text_three') }}" @endif class="form-control" />
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