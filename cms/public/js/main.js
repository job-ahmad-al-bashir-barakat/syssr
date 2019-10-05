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