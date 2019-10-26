
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
.form-group.req label:not(.radio-inline):after,
span.req:after {
    font-family: monospace;
    position: absolute;
    content: "*";
    color: #F44336 !important;
    padding-left: 6px;
    font-size: 18px;
}
.facebook-color{
    color: #3B5998 !important;
}
.linkedin-color{
    color: #007bb5 !important;
}
.twitter-color{
    color: #1DA1F2 !important;
}
.skype-color{
    color: #00aff0 !important;
}
.whatsapp-color{
    color: #25d366 !important;
}
.youtube-color{
    color: #DD493D !important;
}
.medium-color{
    color: #12100e !important;
}
.google-plus-color{
    color: #d64836 !important;
}
</style>
