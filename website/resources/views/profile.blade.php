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
            <form id="form-profile" enctype="multipart/form-data" method="POST" data-parsley-validate>
                <div class="row">
                    <div class="col-md-6">
                        <div class="brk-form brk-form-round" data-brk-library="component__form">

                            <div class="mb-50">
                                <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-username-form">User Name</label>
                                <input id="brk-username-form" name="username" type="text" placeholder="Username" value="{{ $user->username ?? '' }}" required data-parsley-errors-container="#username-error">
                                <div id="username-error" class="d-inline-block invalid-feedback pl-4"></div>
                            </div>

                            <div class="mb-50">
                                <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-email-form">Email</label>
                                <input id="brk-email-form" name="email" type="email" placeholder="enter-your@mail.com" value="{{ $user->email ?? '' }}" required  data-parsley-errors-container="#email-error">
                                <div id="email-error" class="d-inline-block invalid-feedback pl-4"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-50">
                                        <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-firstname-form">First Name</label>
                                        <input id="brk-firstname-form" name="firstname" type="text" placeholder="First Name" value="{{ $user->first_name ?? '' }}" required  data-parsley-errors-container="#firstname-error">
                                        <div id="firstname-error" class="d-inline-block invalid-feedback pl-4"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-50">
                                        <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-lastname-form">Last Name</label>
                                        <input id="brk-lastname-form" name="lastname" type="text" placeholder="Last Name" value="{{ $user->last_name ?? '' }}" required  data-parsley-errors-container="#lastname-error">
                                        <div id="lastname-error" class="d-inline-block invalid-feedback pl-4"></div>
                                    </div>
                                </div>
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
                        <div class="col-md-6">
                            <div class="mb-50">
                                <label class="brk-form-label font__family-montserrat font__weight-bold" for="gender">Gender</label>
                                <select id="gender" name="gender">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="M" @if($user->gender == 'M') selected @endif>Male</option>
                                    <option value="F" @if($user->gender == 'F') selected @endif>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-50">
                                <label class="brk-form-label font__family-montserrat font__weight-bold" for="date-id-round">Birth date</label>
                                <input id="date-id-round" class="brk-form-date" name="birth_date" type="date" value="{{ $user->birth_date ?? '' }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brk-form brk-form-round" data-brk-library="component__form">
                    <div class="row">
                        <div class="col-md-6 mb-50"><label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-old-pass-form">Old Password</label> <input id="brk-old-pass-form" name="old_password" type="password" placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-50">
                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-new-pass-form">New Password</label>
                            <input id="brk-new-pass-form" name="new_password" type="password" placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;">
                        </div>
                        <div class="col-md-6 mb-50">
                            <label class="brk-form-label font__family-montserrat font__weight-bold" for="brk-new-confirm-pass-form">Confirm Password</label>
                            <input id="brk-new-confirm-pass-form" name="new_password_confirmation" type="password" placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;" data-parsley-equalto="#brk-new-pass-form" data-parsley-errors-container="#confirm-pass-error">
                            <div id="confirm-pass-error" class="d-inline-block invalid-feedback pl-4"></div>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-70">
                    <button type="submit" class="btn btn-inside-out btn-inside-out-invert btn-lg border-radius-25 font__family-open-sans font__weight-bold btn-min-width-200 brk-library-rendered rendered" data-brk-library="component__button">
                        <span class="before">Save</span>
                        <span class="text">Click Me</span>
                        <span class="after">Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('custom/plugin/parsley.js/parsley.min.js') }}"></script>
    <script src="{{ asset('custom/plugin/slim-cropper/slim/slim.jquery.js') }}"></script>
    <script>
        jQuery(function () {
            var api_token = jQuery('meta[name="api-token"]').attr('content');
            var csrf_token = jQuery('meta[name="csrf-token"]').attr('content');
            var api_url = "{{ config('api.base_url') }}";

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
                service: api_url + 'upload/avatar',
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
            jQuery.ajaxSetup({
                data: {
                    api_token: api_token
                },
                headers: {
                    // 'X-CSRF-TOKEN': csrf_token,
                    // 'Authorization': 'Bearer ' + api_token,
                    // 'Accept': 'application/json'
                }
            });
            // add FormData api_token
            jQuery.ajaxPrefilter(function (options, originalOptions, jqXHR) {
                if (originalOptions.data instanceof FormData) {
                    originalOptions.data.append('api_token', api_token);
                }
            });
            jQuery('#form-profile').parsley().on('form:submit', function() {
                var form = jQuery('#form-profile')[0];
                var formData = new FormData(form);

                jQuery.ajax({
                    url: api_url + 'member',
                    data: formData,
                    type: "POST",
                    contentType: false,
                    processData: false,
                    success: function() { alert("Success"); },
                    error: function() { alert('Failed!'); },
                });
                return false;
            });
        });
    </script>
@endsection
