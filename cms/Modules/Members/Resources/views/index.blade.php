@extends('layouts.master')

@section('title', trans('members::main.members'))

@section('content')

    <!-- begin:: Content Head -->
    <div class="kt-subheader kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">{{trans('members::main.members')}}</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__group" id="kt_subheader_search">
                    <span class="kt-subheader__desc" id="kt_subheader_total"><b>{{$total_members}}</b> {{trans('cms.total')}} </span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <!-- <a href="{{url('members/create')}}" class="btn btn-label-brand btn-bold">{{trans('members::main.add_member')}}</a> -->
            </div>
        </div>
    </div>
    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <!--begin::Portlet-->
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-datatable" id="membersDatatable"></div>
            </div>
        </div>
        <!--end::Portlet-->

    </div>
    <!-- end:: Content -->

@endsection


@section('js')
<script>
    $(function(){

        var membersDatatable = $('#membersDatatable').KTDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
                        url: '{!! route('getDatatableMembers.data') !!}',
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
				selector: {
					class: 'kt-checkbox--solid'
				},
				textAlign: 'center',
                }, {
                    field: "full_name",title: "{{trans('members::main.full_name')}}",width: 200,
                    template: function(data, i) {
                        var stateNo = KTUtil.getRandomInt(0, 6);
						var states = ['success','brand','danger','success','warning','primary','info'];
						var state = states[stateNo];

						var output = '<div class="kt-user-card-v2">\
								<div class="kt-user-card-v2__pic">\
									<div class="kt-badge kt-badge--xl kt-badge--' + state + '">' + data.full_name.substring(0, 1) + '</div>\
								</div>\
								<div class="kt-user-card-v2__details">\
									<a href="#" class="kt-user-card-v2__name">' + data.full_name + '</a>\
									<span class="kt-user-card-v2__desc">member role</span>\
								</div>\
							</div>';

                        return output;
                    }
                }, {
                    field: "username",title: "{{trans('members::main.username')}}",width: 125,
                }, {
                    field: "email",title: "{{trans('members::main.email')}}",width: 150,
                }, {
                    field: "verified",title: "{{trans('members::main.verified')}}",width: 100,textAlign: 'center',
                    template: function(data) {
                        var status = {
                            'Y': {'title': '{{trans('cms.yes')}}', 'state': 'success'},
                            'N': {'title': '{{trans('cms.no')}}', 'state': 'danger'},
                        };
                        return '<span class="kt-badge kt-badge--' + status[data.verified].state + ' kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-' + status[data.verified].state + '">' +
                                status[data.verified].title + '</span>';
                    },
                }, {
                    field: "confirm",title: "{{trans('members::main.activate')}}",width: 100,textAlign: 'center',
                    template: function(data) {
                        if(data.verified == 'N')
                            return '<button type="button" class="btn btn-brand kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light member-activate">{{ trans('members::main.activate') }}</button>'
                        else
                            return '';
                    },
                }, {
                    field: "Actions",width: 80,title: "{{trans('cms.actions')}}",sortable: false,autoHide: false,overflow: 'visible',
                    template: function() {
                        return '\
                                <div class="dropdown">\
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">\
                                        <i class="flaticon-more-1"></i>\
                                    </a>\
                                    <div class="dropdown-menu dropdown-menu-right">\
                                        <ul class="kt-nav">\
                                            <li class="kt-nav__item">\
                                                <a href="#" class="kt-nav__link">\
                                                    <i class="kt-nav__link-icon flaticon2-expand"></i>\
                                                    <span class="kt-nav__link-text">View</span>\
                                                </a>\
                                            </li>\
                                            <li class="kt-nav__item">\
                                                <a href="#" class="kt-nav__link">\
                                                    <i class="kt-nav__link-icon flaticon2-contract"></i>\
                                                    <span class="kt-nav__link-text">Edit</span>\
                                                </a>\
                                            </li>\
                                            <li class="kt-nav__item">\
                                                <a href="#" class="kt-nav__link">\
                                                    <i class="kt-nav__link-icon flaticon2-trash"></i>\
                                                    <span class="kt-nav__link-text">Delete</span>\
                                                </a>\
                                            </li>\
                                            <li class="kt-nav__item">\
                                                <a href="#" class="kt-nav__link">\
                                                    <i class="kt-nav__link-icon flaticon2-mail-1"></i>\
                                                    <span class="kt-nav__link-text">Export</span>\
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
    });
//-----------------------------------------------------------------------------//
    $(document).on('click','.member-activate', function () {
        $.post("{{ route('members.activate') }}",{ _method: 'PUT' },function (res) {
            $(this).remove();
        })
    });
//-----------------------------------------------------------------------------//
</script>
@endsection
