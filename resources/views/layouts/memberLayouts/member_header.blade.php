<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="logo-pro">
        <a href="/"><img class="main-logo" src="{{ asset('images/backend_images/logo/logo.png') }}" alt="" /></a>
      </div>
    </div>
  </div>
</div>
<div class="header-advance-area">
  <div class="header-top-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="header-top-wraper">
            <div class="row">
              <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                <div class="menu-switcher-pro">
                  <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                  <i class="educate-icon educate-nav"></i>
                  </button>
                </div>
              </div>
              <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                <div class="header-top-menu tabl-d-n">
                  <ul class="nav navbar-nav mai-top-nav">                   
                    
                  </ul>
                </div>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="header-right-info">
                  <ul class="nav navbar-nav mai-top-nav header-right-menu">
                  <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                      <img src="{{ asset('images/backend_images/member_profile/'.Auth::guard('agent')->user()->profile_image) }}" alt="" />
                      <span class="admin-name">{{ ucwords(Auth::guard('agent')->user()->username) }}</span>
                      <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                    </a>
                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                      <li>
                        <a href="{{ route('updateMemberDetails') }}"><span class="edu-icon edu-user-rounded author-log-ic"></span>Update Details</a>
                      </li>
                      <li>
                        <a href="{{ route('userSettings') }}"><span class="edu-icon edu-settings author-log-ic"></span>Change Password</a>
                      </li>
                      <li>
                        <a href="{{ route('memberLogout')}}"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                      <img src="{{ asset('images/backend_images/member_profile/'.Auth::guard('agent')->user()->profile_image) }}" alt="" />
                      <span class="admin-name">0.00</span>
                      {{-- //wallet amount --}}
                    </a>                    
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="mobile-menu-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="mobile-menu">
          <nav id="dropdown">
            <ul class="mobile-menu-nav">              
              <li><a href="{{ route('memberDashboard')}}">Member Dashboard</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>