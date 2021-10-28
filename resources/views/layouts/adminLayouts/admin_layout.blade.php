<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nepal Direct Marketing | Connect and Earn</title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS============================================ -->
    <link rel="stylesheet" href="{{ url('css/backend_css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/backend_css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/backend_css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('css/backend_css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ url('css/backend_css/owl.transitions.css') }}">
    <!-- animate CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/backend_css/animate.css') }}">
    <!-- normalize CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/backend_css/normalize.css') }}">
    <!-- meanmenu icon CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/backend_css/meanmenu.min.css') }}">
    <!-- main CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/backend_css/main.css') }}">
    <!-- educate icon CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/backend_css/educate-custon-icon.css') }}">
    <!-- morrisjs CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/backend_css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/backend_css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/backend_css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/backend_css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/backend_css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/backend_css/calendar/fullcalendar.print.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/backend_css/tree-viewer/tree-viewer.css') }}">

    <link rel="stylesheet" href="{{ url('css/backend_css/editor/select2.css') }}">
    <link rel="stylesheet" href="{{ url('css/backend_css/editor/datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ url('css/backend_css/editor/bootstrap-editable.css') }}">
    <link rel="stylesheet" href="{{ url('css/backend_css/editor/x-editor-style.css') }}">
    <!-- normalize CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/backend_css/data-table/bootstrap-table.css') }}">
    <link rel="stylesheet" href="{{ url('css/backend_css/data-table/bootstrap-editable.css') }}">
    <!-- style CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/backend_css/style.css') }}">
    <!-- responsive CSS ============================================ -->
    <link rel="stylesheet" href="{{ url('css/backend_css/responsive.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">  
    <!-- summernote CSS ======================================= -->
    <link rel="stylesheet" href="{{ url('css/backend_css/summernote/summernote.css') }}">
    <!-- modernizr JS ============================================ -->
    <script src="{{ url('js/backend_js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    
    <div class="left-sidebar-pro">
        @include('layouts.adminLayouts.admin_sidebar')        
    </div>
    <div class="all-content-wrapper">        
        @include('layouts.adminLayouts.admin_header')
        @yield('content')
        @include('layouts.adminLayouts.admin_footer')        
    </div>

    <!-- jquery ============================================ -->
    <script src="{{ url('js/backend_js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS ============================================ -->
    <script src="{{ url('js/backend_js/bootstrap.min.js') }}"></script>
    <!-- wow JS ============================================ -->
    <script src="{{ url('js/backend_js/wow.min.js') }}"></script>
    <!-- price-slider JS =========================================== -->
    <script src="{{ url('js/backend_js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS ============================================ -->
    <script src="{{ url('js/backend_js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS ============================================ -->
    <script src="{{ url('js/backend_js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS ============================================ -->
    <script src="{{ url('js/backend_js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS ============================================ -->
    <script src="{{ url('js/backend_js/jquery.scrollUp.min.js') }}"></script>
    <!-- counterup JS ============================================ -->
    <script src="{{ url('js/backend_js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('js/backend_js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ url('js/backend_js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS ============================================ -->
    <script src="{{ url('js/backend_js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ url('js/backend_js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS ============================================ -->
    <script src="{{ url('js/backend_js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ url('js/backend_js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- data table JS ============================================ -->
    <script src="{{ url('js/backend_js/data-table/bootstrap-table.js') }}"></script>
    <script src="{{ url('js/backend_js/data-table/tableExport.js') }}"></script>
    <script src="{{ url('js/backend_js/data-table/data-table-active.js') }}"></script>
    <script src="{{ url('js/backend_js/data-table/bootstrap-table-editable.js') }}"></script>
    <script src="{{ url('js/backend_js/data-table/bootstrap-editable.js') }}"></script>
    <script src="{{ url('js/backend_js/data-table/bootstrap-table-resizable.js') }}"></script>
    <script src="{{ url('js/backend_js/data-table/colResizable-1.5.source.js') }}"></script>
    <script src="{{ url('js/backend_js/data-table/bootstrap-table-export.js') }}"></script>
    <!--  editable JS ============================================ -->
    <script src="{{ url('js/backend_js/editable/jquery.mockjax.js') }}"></script>
    <script src="{{ url('js/backend_js/editable/mock-active.js') }}"></script>
    <script src="{{ url('js/backend_js/editable/select2.js') }}"></script>
    <script src="{{ url('js/backend_js/editable/moment.min.js') }}"></script>
    <script src="{{ url('js/backend_js/editable/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ url('js/backend_js/editable/bootstrap-editable.js') }}"></script>
    <script src="{{ url('js/backend_js/editable/xediable-active.js') }}"></script>
    <!-- Chart JS ============================================ -->
    <script src="{{ url('js/backend_js/chart/jquery.peity.min.js') }}"></script>
    <script src="{{ url('js/backend_js/peity/peity-active.js') }}"></script>
    <!-- tab JS ============================================ -->
    <script src="{{ url('js/backend_js/tab.js') }}"></script>
    <!-- morrisjs JS ============================================ -->
    <script src="{{ url('js/backend_js/morrisjs/raphael-min.js') }}"></script>
    <script src="{{ url('js/backend_js/morrisjs/morris.js') }}"></script>
    <script src="{{ url('js/backend_js/morrisjs/morris-active.js') }}"></script>
    <!-- morrisjs JS ============================================ -->
    <script src="{{ url('js/backend_js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ url('js/backend_js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ url('js/backend_js/sparkline/sparkline-active.js') }}"></script>
    <!-- datapicker JS ====================================== -->
    <script src="{{ url('js/backend_js/datapicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('js/backend_js/datapicker/datepicker-active.js') }}"></script>
    <!-- calendar JS ============================================ -->
    <script src="{{ url('js/backend_js/calendar/moment.min.js') }}"></script>
    <script src="{{ url('js/backend_js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ url('js/backend_js/calendar/fullcalendar-active.js') }}"></script>
    <!-- plugins JS ============================================ -->
    <script src="{{ url('js/backend_js/plugins.js') }}"></script>

     <script src="{{ url('js/backend_js/tree-line/jstree.min.js') }}"></script>
    <script src="{{ url('js/backend_js/tree-line/jstree.active.js') }}"></script>
    <script src="{{ url('js/backend_js/summernote/summernote.min.js') }}"></script>
    <script src="{{ url('js/backend_js/summernote/summernote-active.js') }}"></script>
    <!-- main JS ============================================ -->
    <script src="{{ url('js/backend_js/main.js') }}"></script>
    <script src="{{ url('js/backend_js/admin_scripts.js') }}"></script>
    <!-- tawk chat JS ============================================ -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{ url('js/backend_js/tawk-chat.js') }}"></script>
</body>

</html>