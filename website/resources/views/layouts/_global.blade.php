<script>
    var api_token = jQuery('meta[name="api-token"]').attr('content');
    var csrf_token = jQuery('meta[name="csrf-token"]').attr('content');
    var cms_api_url = "{{ config('api.cms_api_url') }}";
    var user_id = "{{ \Auth::id() }}";

    jQuery.ajaxSetup({
        data: {
            api_token: api_token
        },
        headers: {
            'X-CSRF-TOKEN': csrf_token,
            // 'Authorization': 'Bearer ' + api_token,
            // 'Accept': 'application/json'
        }
    });
    // add FormData api_token
    jQuery.ajaxPrefilter(function (options, originalOptions, jqXHR) {
        if (originalOptions.data instanceof FormData) {
            originalOptions.data.append('api_token', api_token);
        }
    });
</script>
