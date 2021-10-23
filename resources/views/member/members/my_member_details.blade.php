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
                <span class="bread-blod">Member Details</span>
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

<div class="single-pro-review-area mt-t-30 mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="profile-info-inner">
          <div class="profile-img">
            @php
                $profileImagePath = "images/backend_images/member_profile/".$memberDetails->profileImage;
            @endphp
            @if($memberDetails->profileImage && file_exists($profileImagePath))
              <img src="{{ asset('images/backend_images/member_profile/'.$memberDetails->profileImage) }}" >
            @else
              <img src="{{ asset('images/dummy-profile.jpg') }}" alt="" />
            @endif
          </div>
          <div class="profile-details-hr">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                <div class="address-hr">
                  <p><b>Name</b><br /> {{ $memberDetails->fullname}}</p>
                </div>
              </div>
              {{-- <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                  <p><b>Designation</b><br /> Head of Dept.</p>
                </div>
              </div> --}}
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                  <p><b>Phone</b><br /> {{$memberDetails->phone_no}}</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                <div class="address-hr">
                  <p><b>Email ID</b><br /> {{ $memberDetails->email }}</p>
                </div>
              </div>
              
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="address-hr">
                  <p><b>Address</b><br /> {{$memberDetails->state}} ,{{$memberDetails->city}},{{$memberDetails->address}} ,{{$memberDetails->zipcode}}</p>
                </div>
              </div>
            </div>
            {{-- <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="address-hr">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <h3>500</h3>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="address-hr">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <h3>900</h3>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="address-hr">
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <h3>600</h3>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
          <ul id="myTabedu1" class="tab-review-design">
            <li class="active"><a href="#userDetails"> User Details</a></li>
            <li><a href="#updateStatus">Update Member Status</a></li>
          </ul>
          <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="userDetails">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="review-content-section">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="address-hr biography">
                          <p><b>Full Name</b><br /> {{$memberDetails->fullName}}</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="address-hr biography">
                          <p><b>Mobile</b><br /> {{$memberDetails->phone_no}}</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="address-hr biography">
                          <p><b>Email</b><br />{{$memberDetails->email}}</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="address-hr biography">
                          <p><b>Location</b><br /> {{$memberDetails->state}} ,{{$memberDetails->city}},{{$memberDetails->address}} ,{{$memberDetails->zipcode}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      {{-- <div class="col-lg-12">
                        <div class="content-profile">
                          <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                            dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                        </div>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-tab-list tab-pane fade" id="updateStatus">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <form action="{{ route('updateMemberStatus', $memberDetails->id) }}" method="POST"> @csrf
                  <div class="review-content-section">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <select class="form-control" name="status">
                            <option value="">Select Status</option>
                            <option value="New">New</option>
                            <option value="Pending">Pending</option>
                            <option value="Processing">Processing</option>
                            <option value="Approved">Approved</option>
                            <option value="Canceled">Canceled</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="payment-adress mg-t-15">
                          <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
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
      </div>
    </div>
  </div>
</div>
@endsection