@extends('layouts.frontLayouts.front_layout')
@section('content')
<main class="container">

  <section>

    <div class="signuppanel">

      <div class="row">

        <div class="col-md-6">

          <div class="signup-info">
            <div class="logopanel">
              <h1><span>[</span> Magic Market <span>]</span></h1>
            </div>
            <div class="mb20"></div>

            <h5><strong>Bootstrap 3 Ecommerce Template!</strong></h5>
            <p>Lookcare is a great theme that is perfect any browser.</p>
            <p>Below are some of the benefits you can have when purchasing this template.</p>
            <div class="mb20"></div>

            <div class="feat-list">
              <i class="fa fa-wrench"></i>
              <h4 class="text-success">Easy to Customize</h4>
              <p>Lookcare is made using Bootstrap 3 so you can easily customize any element of this template following the structure of Bootstrap 3.</p>
            </div>

            <div class="feat-list">
              <i class="fa fa-compress"></i>
              <h4 class="text-success">Fully Responsive Layout</h4>
              <p>Lookcare is design to fit on all browser widths and all resolutions on all mobile devices. Try to scale your browser and see the results.</p>
            </div>

            <div class="feat-list mb20">
              <i class="fa fa-search-plus"></i>
              <h4 class="text-success">Retina Ready</h4>
              <p>When a user load a page, a script checks each image on the page to see if there's a high-res version of that image. If a high-res exists, the script will swap that image in place.</p>
            </div>
            <h4 class="mb20">and much more...</h4>
          </div>
        </div>
        <div class="col-md-6">
          @if(Session::has('success_message'))
          <div class="alert alert-success alert-dismissible show" role="alert">
            {{ Session::get('success_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          @if(Session::has('error_message'))
          <div class="alert alert-danger alert-dismissible show" role="alert" style="margin-top: 10px;">
            {{ Session::get('error_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <form method="post" action="#">@csrf
            <h3 class="nomargin">Sign Up</h3>
            <p class="mt5 mb20">Already a member? <a href="#"><strong>Sign In</strong></a></p>
            <input type="hidden" name="parent_id" id="parent_id">
            <input type="hidden" name="sponser_id" id="sponser_id">
            <div class="mb10">
            <label class="control-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Your name" />
            </div>
            <div class="mb10">
              <label class="control-label">Username</label>
              <input type="text" name="username" id="username" class="form-control" />
            </div>
            <div class="mb10">
              <label class="control-label">Email Address</label>
              <input type="email" name="email" id="email" class="form-control" />
            </div>
            <div class="mb10">
              <label class="control-label">Referrer</label>
              <input type="text" name="referrer_id" id="referrer_id" class="form-control" />
              <small><a href="#">Don't have a referral code?</a></small>
            </div>
            <div class="mb10">
              <label class="control-label">Password</label>
              <input type="password" name="password" id="password" class="form-control" />
            </div>
            <div class="mb10">
              <label class="control-label">Retype Password</label>
              <input type="password" class="form-control" />
            </div>
            <br />
            <button class="btn btn-success btn-block">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection