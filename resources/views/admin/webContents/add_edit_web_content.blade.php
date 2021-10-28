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
                  <span class="bread-blod">Add Edit Web Content Form</span>
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
              <h1>Add Edit Web Content Form</h1>
            </div>
          </div>
          <div class="sparkline12-graph">
            <div class="basic-login-form-ad">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="all-form-element-inner">
                    <form action="{{ route('addEditWebContent') }}" method="post" @if(empty($webcontentdata['id'])) action="{{ route('addEditWebContent') }}" @else action="{{ route('addEditWebContent',$webcontentdata['id']) }} "@endif enctype="multipart/form-data">@csrf
                      <input type="hidden" name="channel">
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Title</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="title" name="title" placeholder="Title here" @if(!empty($webcontentdata['title'])) value="{{ $webcontentdata['title'] }}" @else value="{{ old('title') }}" @endif class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Web Content</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <div class="tinymce-single responsive-mg-b-30">
                                <textarea id="summernote1" name="content">@if(!empty($webcontentdata['content'])) {{ $webcontentdata['content'] }} @else {{ old('content') }} @endif</textarea> 
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Web Content Image</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="web_content_image" id="web_content_image">
                            @if(!empty($webcontentdata['web_content_image']))
                              <img style="width: 50px;" src="{{ asset('images/backend_images/webContents/'.$webcontentdata['web_content_image']) }}">
                              &nbsp;<a href="javascript:void(0)" record="web-content-image" recordid="{{ $webcontentdata['id'] }}" class="confirmDelete">Delete Image</a>
                            @endif
                          </div>
                        </div>
                      </div> 
                      <!--<div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Channel</label>
                          </div>
                          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="channel" name="channel" placeholder="Channel" @if(!empty($webcontentdata['channel'])) value="{{ $webcontentdata['channel'] }}" @else value="{{ old('channel') }}" @endif class="form-control" />
                          </div>
                        </div>
                      </div> -->                                        
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