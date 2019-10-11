@extends('layouts.master')

@section('title', trans('cms.skills'))

@section('content')

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">{{trans('cms.skills')}}</h3>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="Javascript::void(0);" class="btn btn-label-brand btn-bold">{{trans('cms.add')}}</a>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <!--begin::Portlet-->
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-datatable" id="skillsDatatable"></div>
            </div>
        </div>
        <!--end::Portlet-->

    </div>
    <!-- end:: Content -->

@endsection

@section('js')

<script>
 //----------------------------------------------------------------------------//
 function deleteSkill(){
        var currentUser = {{Auth::user()->id}};
        var userId = $(this).attr('data-id');
        if(currentUser==userId){
            var msg = '{{trans('users::main.cant_delete_current_user')}}';
            _alert(msg, 'error');
        }else if(userId==1){
            var msg = '{{trans('users::main.cant_delete_admin_user')}}';
            _alert(msg, 'error');
        }else{
            var userName = $(this).attr('data-full-name');
            var msg = '{{trans('users::main.delete_user')}} ('+ userName + ')';
            _confirm('', msg, 'warning', function(){
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'DELETE',
                    url: 'users/' + userId,
                }).done(function(res) {
                    _alert('{{trans('cms.deleted_successfully')}}','success');
                    usersDatatable.reload();
                });
            });
        }
    }
//----------------------------------------------------------------------------//
    var skillsDatatable;
//----------------------------------------------------------------------------//
    $(function(){
        
        skillsDatatable = $('#skillsDatatable').KTDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
                        url: '{!! route('getDatatableSkills.data') !!}',
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
                                                <a href="{{ url('users') }}/'+data.id+'/edit" class="kt-nav__link">\
                                                    <i class="kt-nav__link-icon fa fa-edit"></i>\
                                                    <span class="kt-nav__link-text">{{trans('cms.edit')}}</span>\
                                                </a>\
                                            </li>\
                                            <li class="kt-nav__item">\
                                                <a href="JavaScript:Void(0);" class="kt-nav__link delete_user" data-id="'+data.id+'" data-full-name="'+data.full_name+'">\
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
        
        $(skillsDatatable).on('kt-datatable--on-init', function() {
            $(skillsDatatable).find('.delete_user').click(deleteSkill);
            console.log('init');
        });

        $(skillsDatatable).on('kt-datatable--on-reloaded', function() {
            $(skillsDatatable).find('.delete_user').click(deleteSkill);
            console.log('reloaded');
        });

    });
//-----------------------------------------------------------------------------//   
</script>

@stop