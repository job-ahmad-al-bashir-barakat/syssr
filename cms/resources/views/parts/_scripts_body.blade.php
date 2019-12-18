<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
    var lang = '{{$lang}}';
    var dir = '{{$dir}}';
    var left = '{{$left}}';
    var right = '{{$right}}';
    var cms_lang = {
        'yes'                   :   '{{trans('cms.yes')}}',
        'no'                    :   '{{trans('cms.no')}}',
        'ok'                    :   '{{trans('cms.ok')}}',
        'add'                   :   '{{trans('cms.add')}}',
        'save'                  :   '{{trans('cms.save')}}',
        'update'                :   '{{trans('cms.update')}}',
        'close'                 :   '{{trans('cms.close')}}',
        'cancel'                :   '{{trans('cms.cancel')}}',
        'are_you_sure'          :   '{{trans('cms.are_you_sure')}}',
        'warning'               :   '{{trans('cms.warning')}}',
    }
</script>

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{ asset('theme/vendors/global/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme/js/scripts.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/summernote/summernote-ext-rtl.js') }}" type="text/javascript"></script>

@if($lang=='ar')
    <script src="{{ asset('js/jquery_validate/localization/messages_ar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/summernote/summernote-ar-AR.js') }}" type="text/javascript"></script>
@endif

<!--end::Global Theme Bundle -->

<script src="{{ asset('js/main.js') }}" type="text/javascript"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });

    $( document ).ajaxError(function( event, request, settings ) {
        switch (request.status) {
            case 401: {
                window.location.href = request.responseJSON.redirect_url;
            }
        }
    });
</script>
