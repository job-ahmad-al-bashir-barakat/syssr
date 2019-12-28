@extends('layouts.master')

@section('title', trans('members::main.members_settings'))

@section('content')

    @include('parts._subheader', ['subheader_title' => trans('members::main.members_settings'), 'save_btn' => 'save-settings'])

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <form id="settings-form" class="kt-form">
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
                                        <th width="20%" class="text-center">
                                            <div class="mb-4">{{trans('members::main.field_name')}}</div>
                                        </th>
                                        <th width="40%">
                                            <div class="mb-2 text-center">{{trans('members::main.field_visibility')}}</div>
                                            <div class="hidden-md-down text-center">
                                                <button type="button" id="all-public" class="btn btn-success btn-sm mx-3" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Public visibility: everyone can see">
                                                    {{trans('members::main.public')}}
                                                </button>
                                                <button type="button" id="all-internal" class="btn btn-primary btn-sm mx-3" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Internal visibility: only logged in members can see">
                                                    {{trans('members::main.internal')}}
                                                </button>
                                                <button type="button" id="all-private" class="btn btn-danger btn-sm mx-3" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Private visibility: only the member owner can see">
                                                    {{trans('members::main.private')}}
                                                </button>
                                            </div>
                                        </th>
                                        <th width="15%">
                                            <div class="mb-2 text-center">{{trans('members::main.required')}}</div>
                                            <div class="hidden-md-down text-center">
                                                <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--danger">
                                                    <label style="margin-bottom: 0">
                                                        <input type="checkbox" id="toggle-required">
                                                        <span style="margin: 0"></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </th>
                                        <th width="15%">
                                            <div class="mb-2 text-center">{{trans('members::main.over_ride')}}</div>
                                            <div class="hidden-md-down text-center">
                                                <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--dark">
                                                    <label style="margin-bottom: 0">
                                                        <input type="checkbox" id="toggle-over-ride">
                                                        <span style="margin: 0"></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($memberFields as $memberField)
                                        <tr>
                                            <td>{{$memberField->field_code}}</td>
                                            <td class="text-center">
                                                <label class="kt-radio kt-radio--success mx-3">
                                                    <input type="radio" {{$memberField->field_visibility=='PUBLIC' ? 'checked' : ''}} value="PUBLIC" class="field-visibility" name="{{$memberField->field_code}}"> {{trans('members::main.public')}}
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--primary mx-3">
                                                    <input type="radio" {{$memberField->field_visibility=='INTERNAL' ? 'checked' : ''}} value="INTERNAL" class="field-visibility" name="{{$memberField->field_code}}"> {{trans('members::main.internal')}}
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio kt-radio--danger mx-3">
                                                    <input type="radio" {{$memberField->field_visibility=='PRIVATE' ? 'checked' : ''}} value="PRIVATE" class="field-visibility" name="{{$memberField->field_code}}"> {{trans('members::main.private')}}
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                @if($memberField->required!='NA')
                                                    <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--danger">
                                                        <label>
                                                            <input type="checkbox" {{$memberField->required=='T' ? 'checked' : ''}} class="required" name="required_{{$memberField->field_code}}">
                                                            <span></span>
                                                        </label>
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if($memberField->over_ride!='NA')
                                                    <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--dark">
                                                        <label>
                                                            <input type="checkbox" {{$memberField->over_ride=='T' ? 'checked' : ''}} class="over-ride" name="over_ride_{{$memberField->field_code}}">
                                                            <span></span>
                                                        </label>
                                                    </span>
                                                @endif
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
        var $this = $(this);
        $this.attr('disabled','disabled').addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light');
        var $form = $('#settings-form');
        var data = $form.serialize();
        var method = 'post';
        $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          method: method,
          url: 'save-member-settings',
          data: data
      }).done(function (res) {
            _toastr('', res.message);
            $this.removeAttr('disabled').removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light');
      });
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
    $('#toggle-required').click(function(){
        toggle_required($(this));
    });
    //=================================================//
    $('#toggle-over-ride').click(function(){
        toggle_override($(this));
    });
    //=================================================//
});
//----------------------------------------------------------------------------------------//
    function toggle_required($this){
        if($this.prop('checked'))
            $('.required').prop('checked',true);
        else
            $('.required').prop('checked',false);
    }
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
</script>
@endsection