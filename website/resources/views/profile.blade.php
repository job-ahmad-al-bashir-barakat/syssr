@extends('layouts.app')

@section('style')
    <style>.magazine-big-font{background-image:url(img/demo_magazine/1222x167_1.jpg);font-size: 156px;line-height: 156px;color:rgba(var(--brand-primary-rgb), .82);}@media (max-width: 767px){.magazine-big-font{font-size: 66px;line-height: 70px;}}</style>
@endsection

@section('content')
    <div class="breadcrumbs__section breadcrumbs__section-grayscale pt-60 pb-60 bg__style lazyload" data-bg="img/demo_magazine/1920x195_1.jpg" data-brk-library="component__breadcrumbs_css">
        <div class="full__size-absolute brk-bg-black opacity-70"></div>
        <div class="container">
            <div class="breadcrumbs__wrapper">
                <div class="pull-left text-left" data-brk-library="component__title">
                    <h2 class="brk-white-font-color font__size-36 line__height-50 font__family-montserrat-alt font__weight-bold">Profile</h2>
                    <h5 class="font__size-14 font__family-montserrat highlight-trend">change user info</h5>
                </div>
                <ol class="breadcrumb pull-right font__size-14 font__weight-bold font__family-montserrat">
                    <li><a href="{{ RouteUrls::profile() }}">Home <i class="fas fa-arrow-right"></i></a></li>
                    <li class="active">Profile</li>
                </ol>
            </div>
        </div>
    </div>
    <h1 class="sr-only">Profile</h1>
    <div class=" bg-cover bg-norepeat bg-position_bottom-center pt-80 pb-80 lazyload" data-bg="img/demo_magazine/1920x908_1.png">
        <div class="container">
{{--            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/demo_magazine/1170x478_1.jpg" alt="alt" class="img-fluid mb-50 lazyload">--}}
            <form enctype="multipart/form-data" method="POST">
                <div class="brk-form brk-form-round" data-brk-library="component__form">
                    <div class="row">
                        <div class="col-md-6 mb-50"><label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-email-form">Email</label> <input id="brk-email-form" name="email" type="email" placeholder="enter-your@mail.com"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-50"><label class="brk-form-label font__family-montserrat font__weight-bold">Gender</label>
                            <select name="select">
                                <option value="Option 1">Male</option>
                                <option value="Option 2">Female</option>
                            </select>
                        </div>
                        <div class="col-md-6"><label class="brk-form-label font__family-montserrat font__weight-bold">Birth date</label> <input id="date-id-round" class="brk-form-date" name="date-round" type="date"></div>
                    </div>
                </div>
                <div class="brk-form brk-form-round" data-brk-library="component__form">
                    <div class="row">
                        <div class="col-md-6 mb-50"><label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-pass-form">Old Password</label> <input id="brk-pass-form" name="password" type="password" placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-50"><label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-pass-form">New Password</label> <input id="brk-pass-form" name="password" type="password" placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;"></div>
                        <div class="col-md-6 mb-50"><label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-pass-form">Confirm Password</label> <input id="brk-pass-form" name="password" type="password" placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;"></div>
                    </div>
                </div>
                <div class="text-center pt-70">
                    <a href="#" class="btn btn-inside-out btn-inside-out-invert btn-lg border-radius-25 font__family-open-sans font__weight-bold btn-min-width-200 brk-library-rendered rendered" data-brk-library="component__button"><span class="before">Save</span><span class="text">Click Me</span><span class="after">Save</span></a>
                </div>
            </form>
        </div>
    </div>
@endsection
