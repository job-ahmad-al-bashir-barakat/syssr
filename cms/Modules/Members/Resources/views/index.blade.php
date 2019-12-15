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
                        return `
                            <div class="kt-user-card-v2">
								<div class="kt-user-card-v2__pic">
									<div class="kt-badge kt-badge--xl kt-badge--${states[stateNo]}">${data.full_name.substring(0, 1)}</div>
								</div>
								<div class="kt-user-card-v2__details">
									<a href="#" class="kt-user-card-v2__name">${data.full_name}</a>
									<span class="kt-user-card-v2__desc">member role</span>
								</div>
							</div>
                        `;
                    }
                }, {
                    field: "username",title: "{{trans('members::main.username')}}",width: 125,
                }, {
                    field: "email",title: "{{trans('members::main.email')}}",width: 150,
                }, {
                    field: "verified",title: "{{trans('members::main.verified')}}",width: 100,textAlign: 'center',
                    template: function(data) {
                        if(data.verified == 'N')
                            return `
                                    <button type="button" class="btn btn-danger btn-sm verify-member" data-id="${data.id}" data-name="${data.full_name}">{{ trans('members::main.verify') }}</button>
                                    <span class="status-yes" style="display:none;">
                                        <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;
                                        <span class="kt-font-bold kt-font-success">${'{{trans('cms.yes')}}'}</span>
                                    </span>
                                `;
                        else
                            return `
                                <span class="status-yes">
                                    <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;
                                    <span class="kt-font-bold kt-font-success">${'{{trans('cms.yes')}}'}</span>
                                </span>
                            `;
                    },
                }, {
                    field: "Actions",width: 80,title: "{{trans('cms.actions')}}",sortable: false,autoHide: false,overflow: 'visible',
                    template: function(data) {
                        return `
                                <div class="dropdown">
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">
                                        <i class="flaticon-more-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-expand"></i>
                                                    <span class="kt-nav__link-text">View</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-contract"></i>
                                                    <span class="kt-nav__link-text">Edit</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="JavaScript:Void(0);" class="kt-nav__link delete-member" data-id="${data.id}" data-name="${data.full_name}">
                                                    <i class="kt-nav__link-icon fa fa-trash"></i>
                                                    <span class="kt-nav__link-text">${'{{trans('cms.delete')}}'}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            `;
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
    $(document).on('click','.verify-member', function () {
        var $this = $(this),
            id = $this.data('id'),
            name = $this.data('name'),
            title = '{{trans('members::main.verify_confirm')}}',
            confirm_msg = '{{trans('members::main.verify_confirm_msg')}} ('+name+')',
            success_msg = '{{trans('members::main.verify_success_msg')}}';

        _confirm(title, confirm_msg, 'info', function(){
            $.post(`{{ RouteUrls::membersActivate() }}/${id}`,{ _method: 'PUT' },function (res) {
                var tr = $this.closest('tr');
                tr.find('.status-yes').show();
                $this.remove();
                _toastr('', success_msg);
            });
        });
        
    });
//-----------------------------------------------------------------------------//
    $(document).on('click','.delete-member', function () {
        var currentUser = {{Auth::user()->id}};
        var $this = $(this),
            id = $this.data('id'),
            name = $this.data('name'),
            title = '{{trans('members::main.verify_confirm')}}',
            confirm_msg = '{{trans('members::main.delete_member')}} ('+name+')';

        if(currentUser==id){
            var msg = '{{trans('members::main.cant_delete_current_user')}}';
            _alert(msg, 'error');
        }else if(id==1){
            var msg = '{{trans('members::main.cant_delete_admin_user')}}';
            _alert(msg, 'error');
        }else{
            _confirm('', confirm_msg, 'warning', function(){
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'DELETE',
                    url: `{{ RouteUrls::membersDelete() }}/${id}`,
                }).done(function(res) {
                    _toastr('', res.message);
                    membersDatatable.reload();
                });
            });
        }
        
    });
//-----------------------------------------------------------------------------//
</script>
@endsection
