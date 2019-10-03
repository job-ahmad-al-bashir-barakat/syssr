
<!--begin::Global Theme Styles(used by all pages) -->
<link href="{{ asset('theme/vendors/global/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />

<!--end::Global Theme Styles -->

<!--begin::Layout Skins(used by all pages) -->
<link href="{{ asset('theme/css/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('theme/css/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('theme/css/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('theme/css/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />

<!--end::Layout Skins -->


<!-- beging::the logo of the cms -->
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
<!-- end::the logo of the cms -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
<link rel="stylesheet" href="{{asset('fonts/J-flat-font/font.css')}}">

@if($lang=='ar')
    <link href="{{ asset('theme/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
@else
    <link href="{{ asset('theme/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
@endif

<style>
body {
    font-family: "Poppins", "JF Flat Regular", sans-serif;
}
</style>