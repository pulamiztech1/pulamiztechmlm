<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login | Kiaalap - Kiaalap Admin Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
        ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ url('css/backend_css/bootstrap.min.css') }}">
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ url('css/backend_css/font-awesome.min.css') }}">
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ url('css/backend_css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ url('css/backend_css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ url('css/backend_css/owl.transitions.css') }}">
        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ url('css/backend_css/animate.css') }}">
        <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ url('css/backend_css/normalize.css') }}">
        <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ url('css/backend_css/main.css') }}">
        <!-- morrisjs CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ url('css/backend_css/morrisjs/morris.css') }}">
        <!-- mCustomScrollbar CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ url('css/backend_css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
        <!-- metisMenu CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ url('css/backend_css/metisMenu/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ url('css/backend_css/metisMenu/metisMenu-vertical.css') }}">
        <!-- calendar CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ url('css/backend_css/calendar/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ url('css/backend_css/calendar/fullcalendar.print.min.css') }}">
        <!-- forms CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ url('css/backend_css/form/all-type-forms.css') }}">
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ url('css/backend_css/style.css') }}">
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ url('css/backend_css/responsive.css') }}">
        <!-- modernizr JS
        ============================================ -->
        <script src="{{ url('js/backend_js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="error-pagewrap">
            <div class="error-page-int">
                <div class="text-center m-b-md custom-login">
                    <h3>Direct Marketing App</h3>
                    <p>This is the best marketing platform ever!</p>
                </div>
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
                <div class="content-error">
                    <div class="hpanel">
                        <div class="panel-body">
                            <form action="{{ route('adminLogin') }}" id="loginForm" method="post"> @csrf
                                <div class="form-group">
                                    <label class="control-label" for="email">Email/Username</label>
                                    <input type="text" placeholder="example@gmail.com" title="Please enter you email" required="" value="{{ old('email') }}" name="email" id="email" class="form-control">
                                    <span class="help-block small">Your unique email</span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="password">Password</label>
                                    <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                    <span class="help-block small">Your strong password</span>
                                </div>
                                <button class="btn btn-success btn-block loginbtn">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-center login-footer">
                    <p>Copyright © {{ date('Y') }}. All rights reserved. Developed by <a href="https://pulamiztech.com/" target="_blank">PulamizTech</a></p>
                </div>
            </div>
        </div>
        <!-- jquery
        ============================================ -->
        <script src="{{ url('js/backend_js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- bootstrap JS
        ============================================ -->
        <script src="{{ url('js/backend_js/bootstrap.min.js') }}"></script>
        <!-- wow JS
        ============================================ -->
        <script src="{{ url('js/backend_js/wow.min.js') }}"></script>
        <!-- price-slider JS
        ============================================ -->
        <script src="{{ url('js/backend_js/jquery-price-slider.js') }}"></script>
        <!-- meanmenu JS
        ============================================ -->
        <script src="{{ url('js/backend_js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS
        ============================================ -->
        <script src="{{ url('js/backend_js/owl.carousel.min.js') }}"></script>
        <!-- sticky JS
        ============================================ -->
        <script src="{{ url('js/backend_js/jquery.sticky.js') }}"></script>
        <!-- scrollUp JS
        ============================================ -->
        <script src="{{ url('js/backend_js/jquery.scrollUp.min.js') }}"></script>
        <!-- mCustomScrollbar JS
        ============================================ -->
        <script src="{{ url('js/backend_js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ url('js/backend_js/scrollbar/mCustomScrollbar-active.js') }}"></script>
        <!-- metisMenu JS
        ============================================ -->
        <script src="{{ url('js/backend_js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ url('js/backend_js/metisMenu/metisMenu-active.js') }}"></script>
        <!-- tab JS
        ============================================ -->
        <script src="{{ url('js/backend_js/tab.js') }}"></script>
        <!-- icheck JS
        ============================================ -->
        <script src="{{ url('js/backend_js/icheck/icheck.min.js') }}"></script>
        <script src="{{ url('js/backend_js/icheck/icheck-active.js') }}"></script>
        <!-- plugins JS
        ============================================ -->
        <script src="{{ url('js/backend_js/plugins.js') }}"></script>
        <!-- main JS
        ============================================ -->
        <script src="{{ url('js/backend_js/main.js') }}"></script>
        <!-- tawk chat JS
        ============================================ -->
        <script src="{{ url('js/backend_js/tawk-chat.js') }}"></script>
    </body>
</html>