@extends('layouts.frontLayouts.front_layout')
@section('content')
<main class="container">
    <section>
        <div class="signinpanel">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
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
                    <form method="post" action="{{ route('memberLogin') }}">@csrf
                        <h4 class="nomargin">Sign In</h4>
                        <p class="mt5 mb20">Login to access your account.</p>
                        <input type="text" name="username" id="username" class="form-control uname" placeholder="Username" />
                        <input type="password" name="password" id="password" class="form-control pword" placeholder="Password" />
                        <a href="#"><small>Forgot Your Password?</small></a>
                        <button class="btn btn-success btn-block">Sign In</button>
                    </form>
                </div>
                <div class="col-md-5 col-md-push-1">
                    <div class="signin-info">
                        <div class="logopanel">
                            <h1><span>[</span> Magic Market <span>]</span></h1>
                        </div>
                        <div class="mb20"></div>
                        <h5><strong>Welcome to Magic Direct Market!</strong></h5>
                        <ul>
                            <li><i class="fa fa-arrow-circle-o-right mr5"></i> Fully Responsive Layout</li>
                            <li><i class="fa fa-arrow-circle-o-right mr5"></i> HTML5/CSS3 Valid</li>
                            <li><i class="fa fa-arrow-circle-o-right mr5"></i> Ecommerce Template</li>
                            <li><i class="fa fa-arrow-circle-o-right mr5"></i> Easy Customize</li>
                            <li><i class="fa fa-arrow-circle-o-right mr5"></i> and much more...</li>
                        </ul>
                        <div class="mb20"></div>
                        <strong>Not a member? <a href="{{ route('memberRegister') }}">Sign Up</a></strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection