@extends('layouts.master')

@section('title', trans('cms.contact_us'))

@section('content')

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">{{trans('cms.contact_us')}}</h3>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="Javascript:void(0);" class="btn btn-label-brand btn-bold save-contact">{{trans('cms.save')}}</a>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->


    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <form id="contact-form" method="post" action="contact-us">
            <input name="_token" type="hidden" value="{!! csrf_token() !!}">
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
                                    <label>{{trans('pages::main.contact_email')}} <span class="req"></span></label>
                                    <input type="email" class="form-control req email" name="contact_email" id="contact_email" value="{{$contactUs['contact_email']}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <label>{{trans('pages::main.phone')}} <span class="req"></span></label>
                                    <input type="text" class="form-control req" name="phone" id="phone" value="{{$contactUs['phone']}}">
                                    <span class="form-text text-muted"><code>(999) 999-9999</code></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{trans('pages::main.mobile').' (1)'}} <span class="req"></span></label>
                                    <input type="text" class="form-control req mobile_mask" name="mobile_1" id="mobile_1" value="{{$contactUs['mobile_1']}}">
                                    <span class="form-text text-muted"><code>(999) 999-999-9999</code></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <label>{{trans('pages::main.mobile').' (2)'}}</label>
                                    <input type="text" class="form-control mobile_mask" name="mobile_2" id="mobile_2" value="{{$contactUs['mobile_2']}}">
                                    <span class="form-text text-muted"><code>(999) 999-999-9999</code></span>
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
                                        <input type="text" class="form-control" name="facebook" id="facebook" value="{{$contactUs['facebook']}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <div class="input-group">
                                    <div class="input-group-prepend" data-toggle="kt-tooltip" title="LinkedIn">
                                        <span class="input-group-text"><i class="fab fa-linkedin linkedin-color fa-2x"></i></span>
                                    </div>
                                        <input type="text" class="form-control" name="linkedin" id="linkedin" value="{{$contactUs['linkedin']}}">
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
                                        <input type="text" class="form-control" name="twitter" id="twitter" value="{{$contactUs['twitter']}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-prepend" data-toggle="kt-tooltip" title="Google Plus">
                                            <span class="input-group-text"><i class="fab fa-google-plus-square google-plus-color fa-2x"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="google_plus" id="google_plus" value="{{$contactUs['google_plus']}}">
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
                                        <input type="text" class="form-control" name="youtube" id="youtube" value="{{$contactUs['youtube']}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-prepend" data-toggle="kt-tooltip" title="WhatsApp">
                                            <span class="input-group-text"><i class="fab fa-whatsapp-square whatsapp-color fa-2x"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="whatsapp" id="whatsapp" value="{{$contactUs['whatsapp']}}">
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
                                        <input type="text" class="form-control" name="skype" id="skype" value="{{$contactUs['skype']}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-prepend" data-toggle="kt-tooltip" title="Medium">
                                            <span class="input-group-text"><i class="fab fa-medium medium-color fa-2x"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="medium" id="medium" value="{{$contactUs['medium']}}">
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
                    <div class="row">
                        <div class="col-lg-4 offset-lg-4">
                            <button type="button" class="save-contact btn btn-success btn-block btn-md kt-font-bold kt-font-transform-u"><i class="fa fa-save"></i> {{trans('cms.save')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- end:: Content -->

@stop

@section('js')
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
        $('.save-contact').click(function(){
            submit_form('contact-form');
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