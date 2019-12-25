<head>
    <title>@yield('title',trans('app.title_main')){{ trans('app.title_org') }}</title>
    <base href="{{ url('/') }}">
    @include('layouts._meta')
    @include('layouts._favicon')
    <link rel="stylesheet" href="{{asset('vendor/vertical-fixed-navigation/css/reset.css')}}">
    <link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset("css/assets/bootstrap-$dir.css") }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" id="brk-skin-color" href="{{ asset('css/skins/brk-dark-blue-1.css') }}">
    <link id="brk-base-color" rel="stylesheet" href="{{ asset('css/skins/brk-base-color.css') }}">
    <link rel="stylesheet" id="brk-direction-offsets" href="{{ asset("css/assets/offsets-$dir.css") }}">
    <link id="brk-css-min" rel="stylesheet" href="{{ asset("css/assets/styles-$dir.min.css") }}">
    <!-- vertical nav -->
    <link rel="stylesheet" href="{{asset('vendor/vertical-fixed-navigation/js/modernizr.js')}}">
    <link rel="stylesheet" href="{{asset('vendor/vertical-fixed-navigation/css/style.css')}}">
    <!-- vertical nav -->
    <!--custom-->
    <link rel="stylesheet" href="{{asset('custom/fonts/J-flat-font/font.css')}}">
    @yield('style')
    <link id="brk-css-min" rel="stylesheet" href="{{ asset("custom/css/app-$dir.css") }}">
</head>

