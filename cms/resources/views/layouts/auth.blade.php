<!DOCTYPE html>
<html lang="{{$lang}}" dir="{{$dir}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--   Mobile Tab Color -->
    <meta name="theme-color" content="#2775FF">
    <meta name="msapplication-navbutton-color" content="#2775FF">
    <meta name="apple-mobile-web-app-status-bar-style" content="#2775FF">
    <!-- beging::the logo of the cms -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <!-- end::the logo of the cms -->

    <title>Syssr | @yield('title')</title>
 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        

    <link href="{{ asset('theme/css/pages/login/login-6.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

</head>
<body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >
    
    @yield('content')

    <script>
        var KTAppOptions = {"colors":{"state":{"brand":"#5d78ff","dark":"#282a3c","light":"#ffffff","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
    </script>
    <script src="{{ asset('theme/vendors/global/jquery/dist/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/vendors/global/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme/js/scripts.bundle.js') }}" type="text/javascript"></script>

    @yield('js')
</body>
</html>