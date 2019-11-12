@extends('layouts.master')

@section('title', trans('pages::main.add_contact_us'))

@section('content')

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">{{trans('pages::main.add_contact_us')}}</h3>
            </div>
            <div class="kt-subheader__toolbar">
                    <a href="{{url('pages/contact-us')}}" class="btn btn-default btn-bold">{{trans('cms.back')}}</a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-brand btn-bold">{{trans('cms.actions')}}</button>
                        <button type="button" class="btn btn-brand btn-bold dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__item">
                                    <a href="JavaScript:Void(0);" class="kt-nav__link save_add_new">
                                        <i class="kt-nav__link-icon fa fa-plus"></i>
                                        <span class="kt-nav__link-text">{{trans('cms.save_add_new')}}</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="JavaScript:Void(0);" class="kt-nav__link save_exit">
                                        <i class="kt-nav__link-icon fa fa-save"></i>
                                        <span class="kt-nav__link-text">{{trans('cms.save_exit')}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- end:: Subheader -->


    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <form id="contact-form" method="post" action="contact-us">
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
                                    <input type="text" class="form-control req email @error('name_en') is-invalid @enderror" dir="ltr" name="name_en" id="name_en" value="{{old('name_en')}}">
                                    @error('name_en')
                                        <div id="name_en-error" class="error invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <label>{{trans('cms.name').' '.trans('cms.ar')}} <span class="req"></span></label>
                                    <input type="text" class="form-control req email @error('name_ar') is-invalid @enderror" dir="rtl" name="name_ar" id="name_ar" value="{{old('name_ar')}}">
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
                                <div class="form-group">
                                    <label>{{trans('cms.default')}}</label>
                                    <div class="col">
                                        <input data-switch="true" type="checkbox" checked="checked" data-on-text="{{trans('cms.yes')}}" data-handle-width="50" data-off-text="{{trans('cms.no')}}" data-on-color="success" data-off-color="danger">
                                        <i class="fa fa-question-circle" title="To show contact info in header & footer. Must be one default contact us" data-skin="dark" data-toggle="kt-tooltip" data-placement="top"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <label>{{trans('pages::main.phone')}} <span class="req"></span></label>
                                    <input type="text" class="form-control req @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{old('phone')}}">
                                    <span class="form-text text-muted"><code>(999) 999-9999</code></span>
                                    @error('phone')
                                        <div id="phone-error" class="error invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{trans('pages::main.mobile').' (1)'}} <span class="req"></span></label>
                                    <input type="text" class="form-control req mobile_mask @error('mobile_1') is-invalid @enderror" name="mobile_1" id="mobile_1" value="{{old('mobile_1')}}">
                                    <span class="form-text text-muted"><code>(999) 999-999-9999</code></span>
                                    @error('mobile_1')
                                        <div id="mobile_1-error" class="error invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <label>{{trans('pages::main.mobile').' (2)'}}</label>
                                    <input type="text" class="form-control mobile_mask" name="mobile_2" id="mobile_2">
                                    <span class="form-text text-muted"><code>(999) 999-999-9999</code></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{trans('pages::main.address').' '.trans('cms.en')}}</label>
                                    <textarea name="address_en" id="address_en" class="form-control req email" rows="4" dir="ltr"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <label>{{trans('pages::main.address').' '.trans('cms.ar')}}</label>
                                    <textarea name="address_ar" id="address_ar" class="form-control req email" rows="4" dir="rtl"></textarea>
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
<script src="{{ asset('theme/js/pages/crud/forms/widgets/bootstrap-switch.js') }}" type="text/javascript"></script>
<script>
    //----------------------------------------------------------------------------------------//
    $(function(){
        //=================================================//
        $("#phone").inputmask("mask", {
            "mask": "(999) 999-9999"
        });
        $(".mobile_mask").inputmask("mask", {
            "mask": "(999) 999-999-9999"
        });
         //=================================================//
         $('.save_exit').click(function(){
            submit_form('contact-form','exit');
        });
        //=================================================//
        $('.save_add_new').click(function(){
            submit_form('contact-form','add_new');
        });
        //=================================================//
    });
    //----------------------------------------------------------------------------------------//
    function submit_form(form_id){
        $("#"+form_id).validate();
        $("#"+form_id).submit();
    }
    //----------------------------------------------------------------------------------------//
</script>
@stop