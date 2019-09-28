@extends('layouts.master')

@section('title', trans('settings::main.lang_vars'))

@section('content')

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">{{trans('settings::main.lang_vars')}}</h3>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__body">
                <ul class="nav nav-tabs  nav-tabs-line nav-tabs-line-primary" role="tablist">
                    @foreach($filesArr as $file)
                        <li class="nav-item">
                            <a class="nav-link {{($loop->first? 'active' : '')}}" data-toggle="tab" href="#lang_{{$file['filename']}}" role="tab"><i class="fa fa-cloud-upload"></i> {{$file['filename']}}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content">
                    @foreach($filesArr as $file)
                        <div class="tab-pane {{($loop->first? 'active' : '')}}" id="lang_{{$file['filename']}}" role="tabpanel">

                            <div class="kt-portlet__body kt-portlet__body--fit">
                                <!--begin: Datatable -->
                                <table class="kt-datatable" id="html_table" width="100%">
                                    <thead>
                                        <tr>
                                            <th title="Field #1">{{trans('settings::main.lang_var')}}</th>
                                            <th title="Field #2">{{trans('settings::main.lang_var_value').' '.$ar}}</th>
                                            <th title="Field #3">{{trans('settings::main.lang_var_value').' '.$en}}</th>
                                            <th title="Field #4">{{trans('cms.update')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($file['ar'] as $key => $var)
                                            <tr>
                                                <td align="{{$right}}">{{$key}}</td>
                                                <td align="{{$left}}">{{$var}}</td>
                                                <td align="{{$right}}">{{$file['en'][$key]}}</td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!--end: Datatable -->
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--end::Portlet-->

    </div>
    <!-- end:: Content -->

@endsection

@section('js')

    <script>
        var datatable = $('.kt-datatable').KTDatatable({
			data: {
				saveState: {cookie: false},
			},
			// search: {
			// 	input: $('#generalSearch'),
			// },
			columns: [
				{
					field: 'key',width:75,
                },
                {
					field: 'var_ar',width:150,
                },
                {
					field: 'var_en',width:150,
                },
                {
					field: 'update',width:75,sortable: false,autoHide: false,overflow: 'visible',
				},
			],
		});
    </script>

@stop