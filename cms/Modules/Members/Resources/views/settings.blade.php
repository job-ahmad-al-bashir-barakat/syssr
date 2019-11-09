@extends('layouts.master')

@section('title', trans('members::main.members_settings'))

@section('content')

    <!-- begin:: Content Head -->
    <div class="kt-subheader kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">{{trans('members::main.members_settings')}}</h3>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="Javascript:void(0);" class="btn btn-label-brand btn-bold save-settings">{{trans('cms.save')}}</a>
            </div>
        </div>
    </div>
    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <form id="settings-form" method="post" action="save-settings" class="kt-form">
            <input name="_token" type="hidden" value="{!! csrf_token() !!}">
            <!--begin::Portlet-->
            <div class="kt-portlet" data-ktportlet="true">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">{{trans('members::main.member_fields')}}</h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-group">
                            <a href="#" data-ktportlet-tool="toggle" class="btn btn-sm btn-icon btn-clean btn-icon-md"><i class="la la-angle-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-portlet__content">
                        <div class="table-responsive">
						    <table class="table table-bordered table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th width="25%">{{trans('members::main.field_name')}}</th>
                                        <th width="50%">
                                            {{trans('members::main.field_visibility')}}
                                            <button type="button" id="all-public" class="btn btn-success btn-sm mx-4" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Public visibility: everyone can see">
                                                {{trans('members::main.public')}}
                                            </button>
                                            <button type="button" id="all-internal" class="btn btn-primary btn-sm mx-4" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Internal visibility: only logged in members can see">
                                                {{trans('members::main.internal')}}
                                            </button>
                                            <button type="button" id="all-private" class="btn btn-danger btn-sm mx-4" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Private visibility: only the member owner can see">
                                                {{trans('members::main.private')}}
                                            </button>
                                        </th>
                                        <th width="15%">
                                            {{trans('members::main.over_ride')}}
                                            <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--dark">
                                                <label>
                                                    <input type="checkbox" id="toggle-over-ride">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($memberFields as $memberField)
                                        <tr>
                                            <td>{{$memberField->field_code}}</td>
                                            <td class="text-center">
                                                <label class="kt-radio kt-radio--success mx-5">
                                                    <input type="radio" {{$memberField->field_visibility=='PUBLIC' ? 'checked' : ''}} value="PUBLIC" class="field-visibility" name="{{$memberField->field_code}}"> {{trans('members::main.public')}}
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--primary mx-5">
                                                    <input type="radio" {{$memberField->field_visibility=='INTERNAL' ? 'checked' : ''}} value="INTERNAL" class="field-visibility" name="{{$memberField->field_code}}"> {{trans('members::main.internal')}}
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--danger mx-5">
                                                    <input type="radio" {{$memberField->field_visibility=='PRIVATE' ? 'checked' : ''}} value="PRIVATE" class="field-visibility" name="{{$memberField->field_code}}"> {{trans('members::main.private')}}
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--dark">
                                                    <label>
                                                        <input type="checkbox" {{$memberField->over_ride=='T' ? 'checked' : ''}} class="over-ride" name="over_ride_{{$memberField->field_code}}">
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="row">
                        <div class="col-4 offset-4">
                            <button type="button" class="save-settings btn btn-success btn-md btn-block kt-font-bold kt-font-transform-u"><i class="fa fa-save"></i> {{trans('cms.save')}}</button>
                        </div>
                    </div>                    
                </div>
            </div>
            <!--end::Portlet-->
        </form>
    </div>
    <!-- end:: Content -->

@endsection


@section('js')
<script>
//----------------------------------------------------------------------------------------//
    $(function(){
    //=================================================//
    $('.save-settings').click(function(){
        submit_form('settings-form');
    });
    //=================================================//
    $('#all-public').click(function(){
        change_all_visibility('PUBLIC');
    });
    $('#all-internal').click(function(){
        change_all_visibility('INTERNAL');
    });
    $('#all-private').click(function(){
        change_all_visibility('PRIVATE');
    });
    //=================================================//
    $('#toggle-over-ride').click(function(){
        toggle_override($(this));
    });
    //=================================================//
});
//----------------------------------------------------------------------------------------//
    function toggle_override($this){
        if($this.prop('checked'))
            $('.over-ride').prop('checked',true);
        else
            $('.over-ride').prop('checked',false);
    }
//----------------------------------------------------------------------------------------//
    function change_all_visibility(changeTo){
        $('.field-visibility').prop('checked',false);
        $('.field-visibility[value="'+changeTo+'"]').prop('checked',true);
    }
//----------------------------------------------------------------------------------------//
    function submit_form(form_id){
        $("#"+form_id).validate();
        $("#"+form_id).submit();
    }
//----------------------------------------------------------------------------------------//
</script>
@endsection