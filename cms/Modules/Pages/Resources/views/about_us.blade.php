@extends('layouts.master')

@section('title', trans('cms.about_us'))

@section('content')

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">{{trans('cms.about_us')}}</h3>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="Javascript:void(0);" class="btn btn-label-brand btn-bold save-about">{{trans('cms.save')}}</a>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->


    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <form id="about-form" method="post" action="about-us">
            <input name="_token" type="hidden" value="{!! csrf_token() !!}">
            <!--begin::Portlet-->
            <div class="kt-portlet" data-ktportlet="true">
                <div class="kt-portlet__body">
                    <div class="kt-portlet__content">
                        <div class="row">
                            <div class="col-2">
                                <label>{{trans('cms.en')}} <span class="req"></span></label>
                            </div>
                            <div class="col-10">
                                <textarea id="description_en" name="description_en" class="ckeditor req" row="8">{!! $description_en !!}</textarea>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-2">
                                <label>{{trans('cms.ar')}} <span class="req"></span></label>
                            </div>
                            <div class="col-10">
                                <textarea id="description_ar" name="description_ar" class="ckeditor req" row="8">{!! $description_ar !!}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="row">
                        <div class="col-4 offset-4">
                            <button type="button" class="save-about btn btn-success btn-md btn-block kt-font-bold kt-font-transform-u"><i class="fa fa-save"></i> {{trans('cms.save')}}</button>
                        </div>
                    </div>                    
                </div>
            </div>
            <!--end::Portlet-->
        </form>
    </div>

@stop

@section('js')
<script src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>
<script>
//----------------------------------------------------------------------------------------//
$(function(){
    //=================================================//
    $('.save-about').click(function(){
        submit_form('about-form');
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
@endsection