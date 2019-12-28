//----------------------------------------------------------------//
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-"+right,
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "1000",
    "hideDuration": "2000",
    "timeOut": "5000",
    "extendedTimeOut": "3000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  };
//----------------------------------------------------------------//
$(function(){
    initAdditionalValidationClass();
    _summernote();
    showMessageOnLoad();
});
//----------------------------------------------------------------//
function _toastr(title, msg, type='success'){
    switch(type){
        case 'success':
            toastr.success(msg, title);
        break;
        case 'info':
            toastr.info(msg, title);
        break;
        case 'warning':
            toastr.warning(msg, title);
        break;
        case 'error':
            toastr.error(msg, title);
        break;
        default:
            toastr.success(msg, title);
        break;
    }
    
}
//----------------------------------------------------------------//
function submit_form(form_id, button_class, disable_button){
    $("#"+form_id).validate();
    if($("#"+form_id).valid()){
        $('.'+button_class).attr('disabled','disabled').addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light');
        $('.'+disable_button).attr('disabled','disabled')
    }
    $("#"+form_id).submit();
}
//----------------------------------------------------------------//
function _block_cont(cont_class, msg='', state='primary'){
    KTApp.block('.'+cont_class, {
        overlayColor: '#000000',
        type: 'v2',
        state: state,
        message: msg,
    });
}
//----------------------------------------------------------------//
function _unblock_cont(cont_class){
    KTApp.unblock('.'+cont_class);
}
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
function _summernote(){
    if(lang=='ar')
        summerLang = 'ar-AR';
    else
        summerLang = '';
    $('.summernote').summernote({
        height: 250,                 // set editor height  
        minHeight: null,             // set minimum height of editor  
        maxHeight: null,             // set maximum height of editor  
        focus: true,                  // set focus to editable area after initializing summernote  
        toolbar: [  
                      ['style', ['style']],  
                      ['style', ['bold', 'italic', 'underline', 'clear']],  
                      ['fontname', ['fontname']],  
                      ['color', ['color']],  
                      ['para', ['ul', 'ol', 'paragraph']],  
                      ['insert', ['ltr', 'rtl']],  
                      ['insert', ['table','link', 'hr']],  
                      ['view', ['fullscreen', 'codeview', 'help']]  
                ],               
        lang: summerLang
    });
}
//----------------------------------------------------------------//