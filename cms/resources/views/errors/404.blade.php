<!DOCTYPE html>
<html>
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

        <title>{{trans('cms.syssr')}} | 404</title>
		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
		<!--end::Fonts -->

        <link href="{{ asset('theme/css/pages/error/error-1.css') }}" rel="stylesheet" type="text/css" />

        @if($lang=='ar')
            <link rel="stylesheet" href="{{asset('fonts/J-flat-font/font.css')}}">
            <style>
                *{
                    font-family: "JF Flat Regular";
                }
            </style>
        @else
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
        @endif

        <link href="{{ asset('theme/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

        <style>
            .kt-error-v1 .kt-error-v1__container .kt-error-v1__number {
                font-size: 150px;
                margin-left: 50px;
                margin-top: 4rem;
                font-weight: 700;
                color: #595d6e;
            }
        </style>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid  kt-error-v1" style="background-image: url( {{asset('theme/media/error/bg1.jpg')}} );">
				<div class="kt-error-v1__container">
					<h1 class="kt-error-v1__number">404</h1>
                    <p class="kt-error-v1__desc">{{trans('cms.page_not_found')}}</p>
                    <a href="{{url('/')}}" class="btn btn-success" style="margin-left: 80px;">{{trans('cms.go_to_dashboard')}}</a>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

	</body>

	<!-- end::Body -->
</html>