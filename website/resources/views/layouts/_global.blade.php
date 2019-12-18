<script>
    var api_token = jQuery('meta[name="api-token"]').attr('content');
    var csrf_token = jQuery('meta[name="csrf-token"]').attr('content');
    var cms_api_url = "{{ config('api.cms_api_url') }}";
    var user_id = "{{ \Auth::id() }}";
    var site_lang = "{{ $lang }}";
    var left = "{{ $left }}";
    var right = "{{ $right }}";

    jQuery.ajaxSetup({
        data: {
            api_token: api_token,
            lang: site_lang
        },
        headers: {
            'X-CSRF-TOKEN': csrf_token,
            // 'Authorization': 'Bearer ' + api_token,
            // 'Accept': 'application/json'
        }
    });

    jQuery( document ).ajaxError(function( event, request, settings ) {
        switch (request.status) {
            case 401: {
                window.location.href = request.responseJSON.redirect_url;
            }
        }
    });
    // add FormData api_token
    jQuery.ajaxPrefilter(function (options, originalOptions, jqXHR) {
        if (originalOptions.data instanceof FormData) {
            originalOptions.data.append('api_token', api_token);
            originalOptions.data.append('lang', site_lang);
        }
    });

    var choose_here = "{{ trans('app.choose_here') }}";
</script>
