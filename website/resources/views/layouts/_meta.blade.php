<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="api-token" content="@if(\Auth::check()){{ \Auth::user()->getAttribute('api_token') }}@endif">
<!--   Mobile Tab Color -->
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#4d6cab">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#4d6cab">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#4d6cab">

<meta name="description" content="{{trans('app.meta_description')}}">
<meta name="keywords" content="syrian society for scientific research , syrian society, scientific research, syrian, society, scientific, research">

<meta property="og:title" content="{{trans('app.meta_title')}}">
<meta property="og:description" content="{{trans('app.meta_description')}}">
<meta property="og:image" content="{{asset('custom/logo_icon/meta.png')}}">
<meta property="og:url" content="{{url()->current()}}">
