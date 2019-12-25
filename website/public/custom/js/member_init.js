jQuery(function () {
    form_call('.form-ajax',function (res) {
        if(res.resume_file)
            jQuery('.resume_file_download').attr('href',res.resume_file);
    });
    slim_call();
    summernote();
    initDatepicker('yyyy');
    intlTelInputInit();
    cityCountryChange();
    addressAutocomplete();
    tagsInputAutocomplete();
});
