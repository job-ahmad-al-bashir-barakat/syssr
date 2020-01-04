jQuery(function () {
    jQuery('.form-ajax').each(function(){
        var $this = jQuery(this);
        var id = $this.attr('id');
        form_call('#'+id,function (res) {
            $this.find('input,textarea').val('');
        });
    });
});