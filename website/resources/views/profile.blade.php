@extends('layouts.app')

@section('style')
    <style xmlns="">.magazine-big-font{background-image:url(img/demo_magazine/1222x167_1.jpg);font-size: 156px;line-height: 156px;color:rgba(var(--brand-primary-rgb), .82);}@media (max-width: 767px){.magazine-big-font{font-size: 66px;line-height: 70px;}}</style>
    <link rel="stylesheet" href="{{ asset('custom/plugin/slim-cropper/slim/slim.min.css') }}">
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
            <form enctype="multipart/form-data" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="brk-form brk-form-round" data-brk-library="component__form">
                            <div class="mb-50">
                                <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-email-form">Email</label>
                                <input id="brk-email-form" name="email" type="email" placeholder="enter-your@mail.com" value="{{ $user->email ?? '' }}">
                            </div>

                            <div class="mb-50">
                                <label class="brk-form-label font__family-montserrat font__weight-bold">Gender</label>
                                <select name="gender">
                                    <option value="M" @if($user->gender == 'M') selected @endif>Male</option>
                                    <option value="F" @if($user->gender == 'F') selected @endif>Female</option>
                                </select>
                            </div>

                            <div class="mb-50">
                                <label class="brk-form-label font__family-montserrat font__weight-bold">Birth date</label>
                                <input id="date-id-round" class="brk-form-date" name="birth_date" type="date" value="{{ $user->birth_date ?? '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="brk-form p-5" style="width: 70%; margin: 0 auto;">
                            <div class="slim" id="slim-cropper">
                                <input type="file" id="avatar" name="avatar">
                                <img src="{{ asset('custom/img/user-image.png') }}" alt="">
                            </div>
                            <div class="text-center mt-2">
                                <label for="avatar" style="font-weight: 600;font-size: 0.8rem;">Press on image to change file</label>
                            </div>
                        </div>
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

@section('script')
    <script src="{{ asset('custom/plugin/slim-cropper/slim/slim.jquery.js') }}"></script>
    <script>
        jQuery(function () {
            jQuery('#slim-cropper').slim({
                ratio: '1:1',
                minSize: {
                    width: 60,
                    height: 60,
                },
                crop: {
                    x: 0,
                    y: 0,
                    width: 1000,
                    height: 1000
                },
                service: 'upload-async.php',
                download: false,
                willSave: function(data, ready) {
                    alert('saving!');
                    ready(data);
                },
                label: 'Drop your personal image here.',
                buttonConfirmLabel: 'Ok',
                meta: {
                    userId:'1234'
                }
            });
            jQuery.get('http://127.0.0.1:8001/members', function () {

            })
        });
    </script>
@endsection