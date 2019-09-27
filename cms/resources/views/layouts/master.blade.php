<!DOCTYPE html>
<html>
<head>
    <title>Syssr | @yield('title')</title>

    @include('parts._meta')
    @include('parts._scripts_head')
    @include('parts._styles')

    @yield('css')    

    <style>
        .kt-header__topbar .kt-header__topbar-item.kt-header__topbar-item--langs .kt-header__topbar-icon img, .kt-header__topbar .kt-header__topbar-item.kt-header__topbar-item--langs .dropdown-menu .kt-nav__link-icon img {
            border-radius: 2px;
            width: 22px;
        }
    </style>

</head>
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    @include('parts._header_mobile')   
    
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            @include('parts._aside')  

            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                @include('parts._header')  

                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    @yield('content')
                </div>

                @include('parts._footer')

            </div>
        </div>
    </div>

    @include('parts._scripts_body')

    @yield('js')
</body>
</html>