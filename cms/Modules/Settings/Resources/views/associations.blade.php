@extends('layouts.master')

@section('title', trans('cms.associations'))

@section('content')

    <!-- begin:: hidden form -->
    <div class="d-none hidden-forms">
        <form id="association-form">
            <input type="hidden" id="id">
            <div class="form-group">
                <label>{{trans('cms.name').' '.trans('cms.en')}} <span class="req"></span></label>
                <input type="text" name="name_en" id="name_en" dir="ltr" class="form-control">
            </div>
            <div class="form-group">
                <label>{{trans('cms.name').' '.trans('cms.ar')}} <span class="req"></span></label>
                <input type="text" name="name_ar" id="name_ar" dir="rtl" class="form-control">
            </div>
        </form>
    </div>
    <!-- end:: hidden form -->

    <!-- begin:: Subheader -->
    <div class="kt-subheader kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">{{trans('cms.associations')}}</h3>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="Javascript:void(0);" class="btn btn-label-brand btn-bold add-association">{{trans('cms.add')}}</a>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <!--begin::Portlet-->
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-datatable" id="associationsDatatable"></div>
            </div>
        </div>
        <!--end::Portlet-->

    </div>
    <!-- end:: Content -->

@endsection

@section('js')

<script>
 //---------------------------------------------------------------------------//
 function add_association(){
    var $content = $('#association-form').clone();
    var title = '{{trans('settings::main.add_association')}}';
    var $dialog = _dialog(title, $content, {add:true});

    $dialog.find('#add_btn').unbind('click').click(function(){
        var $form = $dialog.find('#association-form');
        // var is_validate = $form.validate();
        // console.log(is_validate);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'POST',
            url: 'associations',
            data: $form.serialize()
        }).done(function (res) {
            if (res.success) {
                _alert(res.message,'success');
                associationsDatatable.reload();
                _dialog('close');
            } else {
                _alert(res.message,'error');
                _dialog('close');
            }
        });
    });
 }
 //---------------------------------------------------------------------------//
 function update_association(){
    var $this = $(this);
    var id = $this.attr('data-id');
    var name = $this.attr('data-name');
    var $content = $('#association-form').clone();
    var title = '{{trans('settings::main.update_association')}} ('+name+')';
    $.get('associations/'+id+'/edit',function(res){
        $content.find('#id').val(id);
        $content.find('#name_ar').val(res.name_ar);
        $content.find('#name_en').val(res.name_en);
    });
    var $dialog = _dialog(title, $content, {update:true});
    $dialog.find('#update_btn').unbind('click').click(function(){
        var $form = $dialog.find('#association-form');
        // var is_validate = $form.validate();
        // console.log(is_validate);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'PATCH',
            url: 'associations/' + id,
            data: $form.serialize()
        }).done(function (res) {
            if (res.success) {
                _alert(res.message,'success');
                associationsDatatable.reload();
                _dialog('close');
            } else {
                _alert(res.message,'error');
                _dialog('close');
            }
        });
    });
 }
 //---------------------------------------------------------------------------//
 function delete_association(){
        var id = $(this).attr('data-id');
        var name = $(this).attr('data-name');
        var msg = '{{trans('settings::main.delete_association')}} ('+ name + ')';
        _confirm('', msg, 'warning', function(){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'DELETE',
                url: 'associations/' + id,
            }).done(function(res) {
                if (res.success) {
                    _alert(res.message,'success');
                    associationsDatatable.reload();
                    _dialog('close');
                } else {
                    _alert(res.message,'error');
                    _dialog('close');
                }
            });
        });
    }
//----------------------------------------------------------------------------//
    var associationsDatatable;
//----------------------------------------------------------------------------//
    $(function(){

        $('.add-association').click(add_association);

        associationsDatatable = $('#associationsDatatable').KTDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
                        url: '{!! route('getDatatableAssociations.data') !!}',
                        method: 'GET',
                    },
                },
                
				pageSize: 10,
				serverPaging: true,
				serverFiltering: true,
				serverSorting: true,
			},

			// layout definition
			layout: {
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false, // display/hide footer
                icons:{
                    pagination: {
                        next: 'fa fa-angle-{{$right}}',
                        prev: 'fa fa-angle-{{$left}}',
                        first: 'fa la-angle-double-{{$left}}',
                        last: 'fa fa-angle-double-{{$right}}',
                        more: 'fa fa-ellipsis-h'
                    }
                },
			},

			// column sorting
			sortable: true,
			pagination: true,

			// columns definition
			columns: [{
				field: 'id',title: '#',sortable: false,width: 5,
                    selector: {
                        class: 'kt-checkbox--solid'
                    },
                    textAlign: 'center',
                }, {
                    field: "name_en",title: "{{trans('cms.name').' '.trans('cms.en')}}",width: 150,
                }, {
                    field: "name_ar",title: "{{trans('cms.name').' '.trans('cms.ar')}}",width: 150,
                }, {
                    field: "code",title: "{{trans('cms.code')}}",width: 100,
                }, {
                    field: "Actions",width: 80,title: "{{trans('cms.actions')}}",sortable: false,autoHide: false,overflow: 'visible',
                    template: function(data) {
                        return '\
                                <div class="dropdown">\
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">\
                                        <i class="flaticon-more-1"></i>\
                                    </a>\
                                    <div class="dropdown-menu dropdown-menu-right">\
                                        <ul class="kt-nav">\
                                            <li class="kt-nav__item">\
                                                <a href="JavaScript:Void(0);" class="kt-nav__link update_association" data-id="'+data.id+'" data-name="'+data['name_'+lang]+'">\
                                                    <i class="kt-nav__link-icon fa fa-edit"></i>\
                                                    <span class="kt-nav__link-text">{{trans('cms.edit')}}</span>\
                                                </a>\
                                            </li>\
                                            <li class="kt-nav__item">\
                                                <a href="JavaScript:Void(0);" class="kt-nav__link delete_association" data-id="'+data.id+'" data-name="'+data['name_'+lang]+'">\
                                                    <i class="kt-nav__link-icon fa fa-trash"></i>\
                                                    <span class="kt-nav__link-text">{{trans('cms.delete')}}</span>\
                                                </a>\
                                            </li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            ';
                    },
            }],
            
            translate:{
                records:{
                    processing: '{{trans('datatable.processing')}}',
                    noRecords: '{{trans('datatable.noRecords')}}',
                },
                toolbar:{
                    pagination:{
                        items:{
                            default:{
                                first: '{{trans('datatable.first')}}',
                                prev: '{{trans('datatable.prev')}}',
                                next: '{{trans('datatable.next')}}',
                                last: '{{trans('datatable.last')}}',
                                more: '{{trans('datatable.more')}}',
                                input: '{{trans('datatable.input')}}',
                                select: '{{trans('datatable.select')}}',
                            },
                            info: '{{trans('datatable.info')}}',
                        }
                    }
                }
            }

        });
        
        $(associationsDatatable).on('kt-datatable--on-init', function() {
            $(associationsDatatable).find('.delete_association').click(delete_association);
            $(associationsDatatable).find('.update_association').click(update_association);
            console.log('init');
        });

        $(associationsDatatable).on('kt-datatable--on-reloaded', function() {
            $(associationsDatatable).find('.delete_association').click(delete_association);
            $(associationsDatatable).find('.update_association').click(update_association);
            console.log('reloaded');
        });

    });
//-----------------------------------------------------------------------------//   
</script>

@stop