@extends('layouts.master')

@section('title', trans('pages::main.add_contact_us'))

@section('css')
    <link rel="stylesheet" href="{{asset('plugins/intl-tel-input/css/intlTelInput.min.css') }}">
    <style>
        .iti { width: 100%; }
        .iti__selected-flag {
            outline: none;
            padding: 0 25px 0 25px;
        }
        .iti__country-list {
            z-index: 999;
        }
        .iti.iti--container {
            width: 90%;
        }
        .iti-mobile .iti--container {
            left: 5%;
            right: 5%;
        }
    </style>
@endsection

@section('content')

    @include('parts._subheader', [
        'subheader_title' => trans('pages::main.add_contact_us'), 
        'actions' => [
                        ['name' => trans('cms.save_add_new'), 'class' => 'save_add_new', 'icon' => 'fa fa-plus'],
                        ['name' => trans('cms.save_exit'), 'class' => 'save_exit', 'icon' => 'fa fa-save'],
        ],
        'back' => true
    ])

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <form id="contact-form" method="post" action="{{route('contact-us.store')}}">
            @csrf
            <!--begin::Portlet-->
            <div class="kt-portlet" data-ktportlet="true">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">{{trans('pages::main.contact_info')}}</h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-group">
                            <a href="#" data-ktportlet-tool="toggle" class="btn btn-sm btn-icon btn-clean btn-icon-md"><i class="la la-angle-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-portlet__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{trans('cms.name').' '.trans('cms.en')}} <span class="req"></span></label>
                                    <input type="text" class="form-control req @error('name_en') is-invalid @enderror" dir="ltr" name="name_en" id="name_en" value="{{old('name_en')}}">
                                    @error('name_en')
                                        <div id="name_en-error" class="error invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <label>{{trans('cms.name').' '.trans('cms.ar')}} <span class="req"></span></label>
                                    <input type="text" class="form-control req @error('name_ar') is-invalid @enderror" dir="rtl" name="name_ar" id="name_ar" value="{{old('name_ar')}}">
                                    @error('name_ar')
                                        <div id="name_ar-error" class="error invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{trans('pages::main.contact_email')}} <span class="req"></span></label>
                                    <input type="email" class="form-control req email @error('contact_email') is-invalid @enderror" name="contact_email" id="contact_email" value="{{old('contact_email')}}">
                                    @error('contact_email')
                                        <div id="contact_email-error" class="error invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <label>{{trans('pages::main.info_email')}} <span class="req"></span></label>
                                    <input type="email" class="form-control req email @error('info_email') is-invalid @enderror" name="info_email" id="info_email" value="{{old('info_email')}}">
                                    @error('info_email')
                                        <div id="info_email-error" class="error invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col">
                                        <label>{{trans('pages::main.phone')}}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <input type="text" class="form-control" name="phone" id="phone" value="{!!old('phone')!!}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col">
                                        <label>{{trans('cms.default')}} <i class="fa fa-question-circle" title="To show contact info in header & footer. Must be one default contact us" data-skin="dark" data-toggle="kt-tooltip" data-placement="top"></i></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
                                            <label>
                                                @if($setDefault=='Y')
                                                    <input type="checkbox" checked name="default">
                                                @else
                                                    <input type="checkbox" disabled name="default">
                                                @endif
                                                <span></span>
                                            </label>
                                        </span>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col">
                                        <label>{{trans('pages::main.mobile').' (1)'}} </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <input type="text" class="form-control" name="mobile_1" id="mobile_1" value="{{old('mobile_1')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col">
                                        <label>{{trans('pages::main.mobile').' (2)'}}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <input type="text" class="form-control" name="mobile_2" id="mobile_2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{trans('pages::main.address').' '.trans('cms.en')}}</label>
                                    <textarea name="address_en" id="address_en" class="form-control" rows="4" dir="ltr"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <label>{{trans('pages::main.address').' '.trans('cms.ar')}}</label>
                                    <textarea name="address_ar" id="address_ar" class="form-control" rows="4" dir="rtl"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{trans('pages::main.lat')}}</label>
                                    <input type="text" class="form-control" name="lat" id="lat">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <label>{{trans('pages::main.lng')}}</label>
                                    <input type="text" class="form-control" name="lng" id="lng">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Portlet-->
            <!--begin::Portlet-->
            <div class="kt-portlet" data-ktportlet="true">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">{{trans('pages::main.social_links')}}</h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-group">
                            <a href="#" data-ktportlet-tool="toggle" class="btn btn-sm btn-icon btn-clean btn-icon-md"><i class="la la-angle-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-portlet__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-prepend" data-toggle="kt-tooltip" title="Facebook">
                                            <span class="input-group-text"><i class="fab fa-facebook-square facebook-color fa-2x"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="facebook" id="facebook">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <div class="input-group">
                                    <div class="input-group-prepend" data-toggle="kt-tooltip" title="LinkedIn">
                                        <span class="input-group-text"><i class="fab fa-linkedin linkedin-color fa-2x"></i></span>
                                    </div>
                                        <input type="text" class="form-control" name="linkedin" id="linkedin">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-prepend" data-toggle="kt-tooltip" title="Twitter">
                                            <span class="input-group-text"><i class="fab fa-twitter-square twitter-color fa-2x"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="twitter" id="twitter">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-prepend" data-toggle="kt-tooltip" title="Google Plus">
                                            <span class="input-group-text"><i class="fab fa-google-plus-square google-plus-color fa-2x"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="google_plus" id="google_plus">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-prepend" data-toggle="kt-tooltip" title="Youtube">
                                            <span class="input-group-text"><i class="fab fa-youtube-square youtube-color fa-2x"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="youtube" id="youtube">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-prepend" data-toggle="kt-tooltip" title="WhatsApp">
                                            <span class="input-group-text"><i class="fab fa-whatsapp-square whatsapp-color fa-2x"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="whatsapp" id="whatsapp">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-prepend" data-toggle="kt-tooltip" title="Skype">
                                            <span class="input-group-text"><i class="fab fa-skype skype-color fa-2x"></i></span>
                                        </div>                                    
                                        <input type="text" class="form-control" name="skype" id="skype">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-prepend" data-toggle="kt-tooltip" title="Medium">
                                            <span class="input-group-text"><i class="fab fa-medium medium-color fa-2x"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="medium" id="medium">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Portlet-->
            <div class="kt-portlet" data-ktportlet="true">
                <div class="kt-portlet__body">
                    <input type="hidden" id="submit_type" name="submit_type" value="exit">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-1">
                            <button type="button" class="save_add_new btn btn-primary btn-block btn-md kt-font-bold kt-font-transform-u"><i class="fa fa-plus"></i> {{trans('cms.save_add_new')}}</button>
                        </div>
                        <div class="col-lg-4 offset-lg-1">
                            <button type="button" class="save_exit btn btn-success btn-block btn-md kt-font-bold kt-font-transform-u"><i class="fa fa-save"></i> {{trans('cms.save_exit')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- end:: Content -->

@stop

@section('js')
<script src="{{ asset('plugins/intl-tel-input/js/intlTelInput.min.js') }}"></script>
<script src="{{ asset('theme/js/pages/crud/forms/widgets/bootstrap-switch.js') }}" type="text/javascript"></script>
<script>
//----------------------------------------------------------------------------------------//
    function intlTelInputFixPadding() {
        var width = $('.iti').find('.iti__flag-container').width();
        $('.iti').find('input').css('padding-left', width > 0 ? (parseInt(width) + 20) + 'px' : '120px' );
    }
//----------------------------------------------------------------------------------------//
    function _intlTelInput(ele_id){
        var input = window.intlTelInput( document.querySelector('#'+ele_id),{
            allowExtensions: true,
            autoFormat: false,
            allowDropdown: true,
            separateDialCode: true,
            initialCountry: "auto",
            hiddenInput: ele_id+'_full',
            utilsScript: "{{asset('plugins/intl-tel-input/js/utils.js')}}",
            geoIpLookup: function(success, failure) {
                $.get("http://www.geoplugin.net/json.gp", function(res) {
                    var countryCode = (res && res.geoplugin_countryCode) ? res.geoplugin_countryCode : "";
                    success(countryCode);
                }).fail(function () {
                    success('US')
                });
            },
            customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                $('#'+ele_id).inputmask(selectedCountryPlaceholder.replace(/\d/g,'9').replace(/-/g,' '), {
                    "placeholder": ' ',
                });
                intlTelInputFixPadding();
                return selectedCountryPlaceholder;
            }
        }).promise.then(function () {
            intlTelInputFixPadding();
        });
    }
//----------------------------------------------------------------------------------------//
    $(function(){
        //=================================================//
        _intlTelInput('phone');
        _intlTelInput('mobile_1');
        _intlTelInput('mobile_2');
        //=================================================//
         $('.save_exit').click(function(){
            $('#submit_type').val('exit');
            submit_form('contact-form', 'save_exit', 'save_add_new');
        });
        //=================================================//
        $('.save_add_new').click(function(){
            $('#submit_type').val('add_new');
            submit_form('contact-form', 'save_add_new', 'save_exit');
        });
        //=================================================//
    });
//----------------------------------------------------------------------------------------//
</script>

<script src="{{ asset('plugins/intl-tel-input/js/utils.js') }}"></script>

@stop