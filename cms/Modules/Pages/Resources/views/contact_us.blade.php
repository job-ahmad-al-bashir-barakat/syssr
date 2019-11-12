@extends('layouts.master')

@section('title', trans('cms.contact_us'))

@section('content')

    <!-- begin:: Subheader -->
    <div class="kt-subheader kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">{{trans('cms.contact_us')}}</h3>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="{{url('pages/contact-us/create')}}" class="btn btn-label-brand btn-bold">{{trans('pages::main.add_contact_us')}}</a>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->


    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        
        <!--begin::Portlet-->
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-datatable" id="contactUsDatatable"></div>
            </div>
        </div>
        <!--end::Portlet-->

    </div>
    <!-- end:: Content -->

@stop

@section('js')
<script>
    //----------------------------------------------------------------------------------------//
    function deleteContactUs(){
        var contactId = $(this).attr('data-id');
        var contactName = $(this).attr('data-full-name');
        var msg = '{{trans('pages::main.delete_contact_us')}} ('+ contactName + ')';
        _confirm('', msg, 'warning', function(){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'DELETE',
                url: 'pages/contact-us/' + contactId,
            }).done(function(res) {
                _alert('{{trans('cms.deleted_successfully')}}','success');
                contactUsDatatable.reload();
            });
        });
    }
    //----------------------------------------------------------------------------------------//
    var contactUsDatatable;
    //----------------------------------------------------------------------------------------//
    $(function(){
        //=================================================//
        contactUsDatatable = $('#contactUsDatatable').KTDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
                        url: '{!! route('getDatatableContactUs.data') !!}',
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
				field: 'id',title: '#',sortable: false,width: 20,
				textAlign: 'center',
                }, {
                    field: "name_en",title: "{{trans('cms.name')}} {{trans('cms.en')}}",width: 125,
                }, {
                    field: "name_ar",title: "{{trans('cms.name')}} {{trans('cms.ar')}}",width: 125,
                }, {
                    field: "contact_email",title: "{{trans('pages::main.contact_email')}}",width: 125,
                }, {
                    field: "info_email",title: "{{trans('pages::main.info_email')}}",width: 125,
                }, {
                    field: "phone",title: "{{trans('pages::main.phone')}}",width: 125,
                }, {
                    field: "mobile_1",title: "{{trans('pages::main.mobile')}} (1)",width: 125,
                }, {
                    field: "default",title: "{{trans('cms.default')}}",width: 100,textAlign: 'center',
                    template: function(data) {
                        var status = {
                            'Y': {'title': '{{trans('cms.yes')}}', 'state': 'success'},
                            'N': {'title': '{{trans('cms.no')}}', 'state': 'danger'},
                        };
                        return '<span class="kt-badge kt-badge--' + status[data.default].state + ' kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-' + status[data.default].state + '">' +
                                status[data.default].title + '</span>';
                    },
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
                                                <a href="{{ url('pages/contact-us') }}/'+data.id+'/edit" class="kt-nav__link">\
                                                    <i class="kt-nav__link-icon fa fa-edit"></i>\
                                                    <span class="kt-nav__link-text">{{trans('cms.edit')}}</span>\
                                                </a>\
                                            </li>\
                                            <li class="kt-nav__item">\
                                                <a href="JavaScript:Void(0);" class="kt-nav__link delete_contact_us" data-id="'+data.id+'" data-contact-name="'+data.name+'">\
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
        
        $(contactUsDatatable).on('kt-datatable--on-init', function() {
            $(contactUsDatatable).find('.delete_contact_us').click(deleteContactUs);
            console.log('init');
        });

        $(contactUsDatatable).on('kt-datatable--on-reloaded', function() {
            $(contactUsDatatable).find('.delete_contact_us').click(deleteContactUs);
            console.log('reloaded');
        });
        //=================================================//
    });
    //----------------------------------------------------------------------------------------//
</script>
@stop