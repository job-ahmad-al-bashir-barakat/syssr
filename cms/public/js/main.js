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
function buildDatatableActionsTemplate (actions={}, data='') {
    var actions_template = ``;
    var data_attr = '';
    if(data){
        $.each(data, function(index, item) {
            if(typeof(item) != 'object')
                data_attr += ' data-'+index+'="'+item+'"';
        });
    }
    if(actions){
        var actions_template = `
                    <div class="dropdown">
                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">
                            <i class="flaticon-more-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">`;
                            $.each(actions, function() {
            actions_template += `   <li class="kt-nav__item">
                                        <a href="JavaScript:Void(0);" class="kt-nav__link `+this.class+`" `+data_attr+`>
                                            <i class="kt-nav__link-icon `+this.icon+`"></i>
                                            <span class="kt-nav__link-text">`+this.title+`</span>
                                        </a>
                                    </i>`;
                            });
        actions_template += `</ul>
                        </div>
                    </div>
        `;
    }    
    return actions_template;
}
//----------------------------------------------------------------//
function _datatable(table_id, url, columns={}, actions={}, selector=false){
    var idCol = { field: 'id',title: '#',sortable: false,width: 30,textAlign: 'center'};
    if(selector){
        idCol['selector'] =  {
            class: 'kt-checkbox--solid'
        };
    }
    var eleColumns = [idCol];
    $.each(columns, function(index, item) {
        eleColumns.push(item);
    });
    eleColumns.push({
        field: "Actions",width: 80,title: actions_label,sortable: false,autoHide: false,overflow: 'visible',
        template: function(data) {
            return buildDatatableActionsTemplate(actions, data);
        }
    });
    var eleDatatable = $('#'+table_id).KTDatatable({
        // datasource definition
        data: {
            type: 'remote',
            source: {
                read: {
                    url: url,
                    method: 'GET',
                },
            },
            pageSize: 10,
            serverPaging: true,
            serverFiltering: true,
            serverSorting: true,
        },

        // layout definition
        layout: {
            scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
            footer: false, // display/hide footer
            icons:{
                pagination: {
                    next: 'fa fa-angle-'+right,
                    prev: 'fa fa-angle-'+left,
                    first: 'fa la-angle-double-'+left,
                    last: 'fa fa-angle-double-'+right,
                    more: 'fa fa-ellipsis-h'
                }
            },
        },

        // column sorting
        sortable: true,
        pagination: true,

        // columns definition
        columns: eleColumns,
        
        translate: datatable_translate

    });
    
    if(actions){
        $(eleDatatable).on('kt-datatable--on-init', function() {
            $.each(actions, function(index, item) {
                $(eleDatatable).find('.'+item['class']).click(item['callback']);
            });
            console.log('init');
        });

        $(eleDatatable).on('kt-datatable--on-reloaded', function() {
            $.each(actions, function(index, item) {
                $(eleDatatable).find('.'+item['class']).click(item['callback']);
            });
            console.log('reloaded');
        });
    }
    return eleDatatable;
}
//----------------------------------------------------------------//
function _alert(msg, type, html=''){
    swal.fire({
        title: '',
        text: msg,
        html: html,
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