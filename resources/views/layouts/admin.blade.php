<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel SB Admin 2">
    <meta name="author" content="Dashboard Pimpinan RH">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard Diskominfo</title>

    <!-- Fonts -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Styles -->
    <!-- <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://www.bandung.go.id/assets/img/logo.svg">
    <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />

    {{-- message toastr --}}
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet" />
    <script src="https://code.highcharts.com/stock/highstock.js"></script>
    <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/stock/modules/accessibility.js"></script>
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/charts-c3/plugin.css')}}"/>

    <!-- MAIN Project CSS file -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
    <link href="https://vjs.zencdn.net/8.0.4/video-js.css" rel="stylesheet" />
</head>

<body id="page-top"  data-theme="light" class="font-nunito">
    <div>
        {!! Toastr::message() !!}
    </div>
    <div id="wrapper" class="theme-cyan">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{ asset('assets/images/logo_diskominfo.svg')}}" width="auto" height="40" alt="Iconic"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Top navbar div start -->
<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-brand">
            <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
            <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
            <!-- <a href="index.html">ICONIC</a>                 -->
        </div>
        
        <div class="navbar-right">
                   
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li>
                    <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- main left menu -->
<div id="left-sidebar" class="sidebar">
    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{ asset('assets/images/user.png')}}" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="user-name" data-toggle="dropdown"><strong>Admin</strong></a>
                <!-- <ul class="dropdown-menu dropdown-menu-right account">
                    <li>
                        <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-power"></i>Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </li>
                </ul> -->
            </div>
            <hr>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
                          
        </ul>
            
        <!-- Tab panes -->
        <div class="tab-content padding-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu li_animation_delay">
                        <li class="active">
                            <a href="#Dashboard" class="has-arrow"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                            <ul>
                                <li class="active"><a href="{{ route('home') }}">Nilai indeks</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#App" class="has-arrow"><i class="fa fa-th-large"></i><span>{{ __('Aplikasi') }}</span></a>
                            <ul>
                                <li><a href="{{ route('aplikasi.index') }}">{{ __('Data Aplikasi') }}</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Widgets" class="has-arrow"><i class="fa fa-puzzle-piece"></i><span>Data dan Statistik</span></a>
                            <ul>
                                <li><a href="{{ route('covid.index') }}">{{ __('Covid 19') }}</a></li>
                                <li><a href="{{ route('vaksin.index') }}">{{ __('Vaksin') }}</a></li>
                                <li><a href="{{ route('sakti.index') }}">{{ __('Sakti 112') }}</a></li>
                                <li><a href="{{ route('pkl.index') }}">{{ __('Data PKL') }}</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Infrastruktud" class="has-arrow"><i class="fa fa-puzzle-piece"></i><span>Infrastruktur</span></a>
                            <ul>
                                <li><a href="{{ route('cctv.index') }}">{{ __('CCTV') }}</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>          
    </div>
</div>



<!-- mani page content body part -->
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>@yield('title')</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                        <li class="breadcrumb-item">@yield('title')</li>
                    </ul>
                </div>
            </div>
        </div>
    <!-- Content -->
    @yield('main-content')
    <!-- end Content -->
    </div>
</div>

</div>


    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script> -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- <script src="{{ asset('js/sb-admin-2.min.js') }}"></script> -->
    <script src="https://unpkg.com/video.js/dist/video.js"></script>
    <script src="https://unpkg.com/@videojs/http-streaming/dist/videojs-http-streaming.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/.js/2.24.0/.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/.js/2.29.3/-with-locales.min.js" integrity="sha512-vFABRuf5oGUaztndx4KoAEUVQnOvAIFs59y4tO0DILGWhQiFnFHiR+ZJfxLDyJlXgeut9Z07Svuvm+1Jv89w5g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment-with-locales.min.js"
        integrity="sha512-vFABRuf5oGUaztndx4KoAEUVQnOvAIFs59y4tO0DILGWhQiFnFHiR+ZJfxLDyJlXgeut9Z07Svuvm+1Jv89w5g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <!-- ✅ load moment.js ✅ -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
      integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- ✅ load moment.js ✅ -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"
      integrity="sha512-o0rWIsZigOfRAgBxl4puyd0t6YKzeAw9em/29Ag7lhCQfaaua/mDwnpE2PVzwqJ08N7/wqrgdjc2E0mwdSY2Tg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
            <!-- ✅ load jQuery UI ✅ -->
            <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
      integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- Javascript -->
    <script src="{{ asset('assets/bundles/libscripts.bundle.js')}}"></script>    
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js')}}"></script>
    <script src="{{ asset('assets/bundles/fullcalendarscripts.bundle.js')}}"></script><!--/ calender javascripts --> 
    <script src="{{ asset('assets/vendor/fullcalendar/fullcalendar.js')}}"></script><!--/ calender javascripts --> 



    <!-- page vendor js file -->
    <script src="{{ asset('assets/vendor/toastr/toastr.js')}}"></script>
    <script src="{{ asset('assets/bundles/c3.bundle.js')}}"></script>

    <!-- page js file -->
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js')}}"></script>
    <!-- <script src="{{ asset('../js/index.js')}}"></script> -->
    <!-- <script src="{{ asset('../js/pages/calendar.js')}}"></script> -->
    <script src="{{ asset('assets/bundles/libscripts.bundle.js')}}"></script>    
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js')}}"></script>
</body>
    @yield('js')
</body>

</html>
