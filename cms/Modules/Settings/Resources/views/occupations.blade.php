@extends('layouts.master')

@section('title', trans('cms.occupations'))

@section('content')

    <!-- begin:: hidden form -->
    <div class="d-none hidden-forms">
        <form id="occupation-form">
            <input type="hidden" id="id">
            <div class="form-group">
                <label for="name_en">{{trans('cms.name').' '.trans('cms.en')}} <span class="req"></span></label>
                <input type="text" name="name_en" id="name_en" dir="ltr" class="form-control req">
            </div>
            <div class="form-group">
                <label for="name_ar">{{trans('cms.name').' '.trans('cms.ar')}} <span class="req"></span></label>
                <input type="text" name="name_ar" id="name_ar" dir="rtl" class="form-control req">
            </div>
        </form>
    </div>
    <!-- end:: hidden form -->

    @include('parts._subheader', ['subheader_title' => trans('cms.occupations'), 'add_btn' => 'add-occupation'])

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <!--begin::Portlet-->
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-datatable" id="occupationsDatatable"></div>
            </div>
        </div>
        <!--end::Portlet-->

    </div>
    <!-- end:: Content -->

@endsection

@section('js')

<script>
 //---------------------------------------------------------------------------//
 function add_occupation(){
    var $content = $('#occupation-form').clone();
    var title = '{{trans('settings::main.add_occupation')}}';
    var $dialog = _dialog(title, $content, {add:true});

    $dialog.find('#add_btn').unbind('click').click(function(){
        var $form = $dialog.find('#occupation-form');
        if($form.valid()){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'POST',
                url: 'occupations',
                data: $form.serialize()
            }).done(function (res) {
                if (res.success) {
                    _toastr('', res.message);
                    occupationsDatatable.reload();
                    _dialog('close');
                } else {
                    _alert('', 'error', res.message);
                }
            });
        }
    });
 }
 //---------------------------------------------------------------------------//
 function update_occupation(){
    var $this = $(this);
    var id = $this.attr('data-id');
    var name = $(this).attr('data-name_'+lang);
    var $content = $('#occupation-form').clone();
    var title = '{{trans('settings::main.update_occupation')}} ('+name+')';
    $.get('occupations/'+id+'/edit',function(res){
        $content.find('#id').val(id);
        $content.find('#name_ar').val(res.name_ar);
        $content.find('#name_en').val(res.name_en);
    });
    var $dialog = _dialog(title, $content, {update:true});
    $dialog.find('#update_btn').unbind('click').click(function(){
        var $form = $dialog.find('#occupation-form');
        if($form.valid()){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'PATCH',
                url: 'occupations/' + id,
                data: $form.serialize()
            }).done(function (res) {
                if (res.success) {
                    _toastr('', res.message);
                    occupationsDatatable.reload();
                    _dialog('close');
                } else {
                    _alert('', 'error', res.message);
                }
            });
        }
    });
 }
 //---------------------------------------------------------------------------//
 function delete_occupation(){
        var id = $(this).attr('data-id');
        var name = $(this).attr('data-name_'+lang);
        var msg = '{{trans('settings::main.delete_occupation')}} ('+ name + ')';
        _confirm('', msg, 'warning', function(){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'DELETE',
                url: 'occupations/' + id,
            }).done(function(res) {
                if (res.success) {
                    _toastr('', res.message);
                    occupationsDatatable.reload();
                    _dialog('close');
                } else {
                    _alert(res.message,'error');
                }
            });
        });
    }
//----------------------------------------------------------------------------//
    var occupationsDatatable;
//----------------------------------------------------------------------------//
    $(function(){

        $('.add-occupation').click(add_occupation);

        var columns = [
            {field: "name_en",title: "{{trans('cms.name').' '.trans('cms.en')}}",width: 150},
            {field: "name_ar",title: "{{trans('cms.name').' '.trans('cms.ar')}}",width: 150},
            {field: "code",title: "{{trans('cms.code')}}",width: 100,}
        ];
        var actions = {
            update : {
                title: '{{trans('cms.edit')}}', class: 'update_occupation', icon: 'fa fa-edit', callback: update_occupation
            },
            delete : {
                title: '{{trans('cms.delete')}}', class: 'delete_occupation', icon: 'fa fa-trash', callback: delete_occupation
            },
        }
        occupationsDatatable = _datatable('occupationsDatatable',
                                        '{!! route('getDatatableOccupations.data') !!}',
                                        columns,
                                        actions,
                                        true);

    });
//-----------------------------------------------------------------------------//   
</script>

@stop