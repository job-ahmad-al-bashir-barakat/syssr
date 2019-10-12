//----------------------------------------------------------------//
$(function(){
    initAdditionalValidationClass();
});
//----------------------------------------------------------------//
function initAdditionalValidationClass () {
    jQuery.validator.addClassRules({
        num : {
            number: true
        },
        req:{
            required: true,
        },
        email:{
            email: true
        },
        password:{
            minlength: 6
        },
        password_confirmation: {
            equalTo: "[name='password']"
        }
    });
}
//----------------------------------------------------------------//
function _alert(msg, type){
    swal.fire({
        title: '',
        text: msg,
        type: type,
        confirmButtonText: cms_lang.ok,
    });
}
//----------------------------------------------------------------//
function _confirm(title, msg, type, confirmCallback, cancelCallback){// type=warning|error|success|info|question
    if(title!='')
        title_val = title;
    else
        title_val = cms_lang.are_you_sure;

    swal.fire({
        title: title_val,
        text: msg,
        type: type,
        showCancelButton: true,
        confirmButtonText: cms_lang.yes,
        cancelButtonText: cms_lang.no
    }).then(function(result){
        if (result.value) {
            confirmCallback();
        } else if (result.dismiss === 'cancel') {
            if(cancelCallback)
                cancelCallback();
        }
    });
}
//----------------------------------------------------------------//
function _dialog(title, content, options={}){
    var $modal = $('#kt_modal');
    if(title=='close'){
        return $modal.modal('hide');
    }else{
        $modal.find('.modal-title').text(title);
        $modal.find('.modal-body').html(content);

        var buttons = '';
        if(options.add) {
            buttons += '<button type="button" class="btn btn-secondary" data-dismiss="modal">'+cms_lang.close+'</button>';
            buttons += '<button type="submit" id="add_btn" class="btn btn-primary">' + cms_lang.add + '</button>';
        }
        else if(options.save) {
            buttons += '<button type="button" class="btn btn-secondary" data-dismiss="modal">'+cms_lang.close+'</button>';
            buttons += '<button type="submit" id="save_btn" class="btn btn-success">' + cms_lang.save + '</button>';
        }
        else if(options.update){
            buttons += '<button type="button" class="btn btn-secondary" data-dismiss="modal">'+cms_lang.close+'</button>';
            buttons += '<button type="submit" id="update_btn" class="btn btn-success">' + cms_lang.update + '</button>';
        }

        if(options.large)
            $modal.find('.modal-dialog').addClass('modal-lg');
        else
            $modal.find('.modal-dialog').removeClass('modal-lg');

        $modal.find('.modal-footer').html(buttons);
        $modal.modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                    // .drags({
                    // 	handle:".modal-header",
                    // 	selected:$modal.find('.modal-dialog')
                    // });

        initAdditionalValidationClass();

        $modal.on('shown.bs.modal', function () {
            $modal.find('input:not([type="hidden"]),textarea').first().focus();
        });

        return $modal;
    }
}
//----------------------------------------------------------------//