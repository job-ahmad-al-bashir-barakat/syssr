<!DOCTYPE html>
<html class="brk-preloader" lang="en" data-brk-skin="brk-blue.css">

<head>
    <title>Login - Berserk HTML</title>
    <base href="{{ url('/') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="favicon.ico">
    <meta name="theme-color" content="#2775FF">
    <meta name="keywords" content="themeforest, theme, html, template">
    <meta name="description" content="themeforest, theme, html, template">
    <link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('css/assets/bootstrap.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" id="brk-skin-color" href="{{ asset('css/skins/brk-blue.css') }}">
    <link id="brk-base-color" rel="stylesheet" href="{{ asset('css/skins/brk-base-color.css') }}">
    <link rel="stylesheet" id="brk-direction-offsets" href="{{ asset('css/assets/offsets.css') }}">
    <link id="brk-css-min" rel="stylesheet" href="{{ asset('css/assets/styles.min.css') }}">
</head>

<body>
@yield('content')
<a href="#top" id="toTop"></a>
<script src="{{ asset('js/scripts.min.js') }}"></script>
</body>

</html>