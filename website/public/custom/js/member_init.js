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
    navigateMemberTabs();
});


function navigateMemberTabs(){
    jQuery('.tab-next').click(function(){
        var $current_tab = jQuery('.brk-tab.active');
        var order = $current_tab.data('order');
        if(order==1){
            jQuery('.tab-previous').removeClass('d-none');
        }else if(order==3){
            jQuery('.tab-next').addClass('d-none');
            jQuery('.submit-btn').removeClass('d-none');
        }else{//2
            
        }
        jQuery('[data-tab="tab-'+(order+1)+'"]').click();
    });

    jQuery('.tab-previous').click(function(){
        var $current_tab = jQuery('.brk-tab.active');
        var order = $current_tab.data('order');
        if(order==4){
            jQuery('.tab-next').removeClass('d-none');
            jQuery('.submit-btn').addClass('d-none');
        }else if(order==2){
            jQuery('.tab-previous').addClass('d-none');
        }else{//3
            
        }
        jQuery('[data-tab="tab-'+(order-1)+'"]').click();
    });

    jQuery('.brk-tab').click(function(){
        var order = jQuery(this).data('order');
        if(order==1){
            jQuery('.tab-next').removeClass('d-none');
            jQuery('.tab-previous,.submit-btn').addClass('d-none');
        }else if(order==2){
            jQuery('.tab-next,.tab-previous').removeClass('d-none');
            jQuery('.submit-btn').addClass('d-none');
        }else if(order==3){
            jQuery('.tab-next,.tab-previous').removeClass('d-none');
            jQuery('.submit-btn').addClass('d-none');
        }else if(order==4){
            jQuery('.submit-btn,.tab-previous').removeClass('d-none');
            jQuery('.tab-next').addClass('d-none');
        }
    });
}
