<head>
    <title>@yield('title',trans('app.title_main')){{ trans('app.title_org') }}</title>
    <base href="{{ url('/') }}">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="api-token" content="@if(\Auth::check()){{ \Auth::user()->getAttribute('api_token') }}@endif">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    @include('layouts._favicon')
    <meta name="theme-color" content="#2775FF">
    <meta name="keywords" content="themeforest, theme, html, template">
    <meta name="description" content="themeforest, theme, html, template">
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

