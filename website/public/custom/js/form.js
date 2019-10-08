function alert_message() {
    var message = jQuery('.alert-success[hidden]').clone(),
        alertMessage = jQuery('.alert-message'),
        messageVisible = jQuery('.alert-success').not('.alert-success[hidden]');

    message.removeAttr('hidden');
    messageVisible.fadeOut(500,function () {
        jQuery(this).remove();
        alertMessage.append(message);
    });
    if(messageVisible.length == 0)
        alertMessage.append(message);
}

function slim_call() {
    var slimCropper = jQuery('#slim-cropper');
    if(slimCropper.length)
        slimCropper.slim();
}

function form_call() {
    var formAjax = jQuery('.form-ajax');
    if(formAjax.length)
        formAjax.parsley().on('form:submit', function() {

            var form = this.$element;
            var formData = new FormData(form[0])
            jQuery.ajax({
                url: form.attr('action'),
                data: formData,
                type: form.attr('method'),
                contentType: false,
                processData: false,
                success: function(res) {
                    alert_message()

                    console.log(res.intended);
                    if(res.intended)
                        window.location.href = res.intended;
                },
                error: function() {  },
            });
            return false;
        });
}
jQuery(function () {
    slim_call();
    form_call();
});
