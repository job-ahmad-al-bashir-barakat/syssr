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

function form_call(form = '.form-ajax', callback) {
    var formAjax = jQuery(form);
    if(formAjax.length)
        formAjax.parsley().off('form:submit').on('form:submit', function() {

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

                    if(callback)
                        callback(res);

                    if(res.intended)
                        window.location.href = res.intended;
                },
                error: function() {  },
            });
            return false;
        })
        .off('field:error').on('field:error', function() {
            // This global callback will be called for any field that fails validation.
            var $element = this.$element,
                tabs = $element.closest('.tabs'),
                tab = $element.closest('.tab');

            if(tabs) {
                tabs.find(`[data-tab=${ tab.attr('id') }]`).click();
                jQuery('html, body').animate({
                    scrollTop: this.$element.offset().top
                }, 100);
            }
        });;
}

function addressAutocomplete() {

    new AddressAutocomplete('#street-address', function (result) {
        jQuery('#location-address').val(`${result.coordinates.lat},${result.coordinates.lng}`);
    });
}

function summernote() {
    jQuery('.summernote').summernote({
        height: 250,
    });
}

function intlTelInputInit() {
    var intlTelInputFixPadding = function () {
        var iti = jQuery('.iti');
        var width = iti.find('.iti__flag-container').width();
        iti.find('input').css('padding-left', width > 0 ? (parseInt(width) + 20) + 'px' : '120px' );
    };
    var input = window.intlTelInput( document.querySelector(".brk-form-mobile"),{
        allowExtensions: true,
        autoFormat: false,
        allowDropdown: true,
        separateDialCode: true,
        initialCountry: "auto",
        hiddenInput: 'mobile_full',
        utilsScript: "custom/plugin/intl-tel-input/js/utils.js",
        geoIpLookup: function(success, failure) {
            jQuery.get("http://www.geoplugin.net/json.gp", function(res) {
                var countryCode = (res && res.geoplugin_countryCode) ? res.geoplugin_countryCode : "";
                success(countryCode);
            }).fail(function () {
                success('US')
            });
        },
        customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
            jQuery('.brk-form-mobile').inputmask(selectedCountryPlaceholder.replace(/\d/g,'9').replace(/-/g,' '), {
                "placeholder": ' '
            });
            intlTelInputFixPadding();
            return selectedCountryPlaceholder;
        }
    });
    input.promise.then(function () {
        intlTelInputFixPadding();
    });
    jQuery('.brk-form-mobile').on('keyup', function () {
        var $this = jQuery(this);
        $this.closest('.iti').find('[name=mobile_full]').val(input.getNumber());
    });

    // load
    if(jQuery('.brk-form-mobile').val())
        jQuery('[name=mobile_full]').val(input.getNumber());
}

function tagsInputAutocomplete() {

    var tags = function (url) {
        var tags = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: url,
            remote: {
                url: url + '&q=%QUERY',
                wildcard: '%QUERY'
            }
        });
        tags.initialize();
        return tags;
    };
    jQuery('.tagsinput').each(function () {
        var $this = jQuery(this);
        jQuery(this).tagsinput({
            tagClass: function(item) {
                return 'badge badge-info';
            },
            itemValue: 'value',
            itemText: 'text',
            typeaheadjs: {
                name: $this.attr('id'),
                displayKey:  'text',
                limit: 10,
                source: tags($this.data('remote')).ttAdapter()
            },
            confirmKeys: [13, 188]
        })

        // load object
        if($this.data('value'))
            $this.data('value').forEach(function(item) {
                $this.tagsinput('add', item)
            })
    });
    jQuery('input').on('keypress', function(e){
        if (e.keyCode == 13){
            e.keyCode = 188;
            e.preventDefault();
        };
    });
    jQuery('.twitter-typeahead .tt-input').attr('size',1);
    jQuery('.add-new-tag').click(function(e) {
        e.preventDefault();

        var button = jQuery(this);

        var title = button.data('title');
        var action = button.data('action');
        var modal = jQuery(button.data('target'));

        modal.find('.modal-title').text(title);
        modal.find('form').attr('action',action ? action : '');

        jQuery('#site-modal').modal('show');

        form_call('.form-ajax-modal',function (res) {
            jQuery('#site-modal').modal('hide');
            modal.find('form input').val('');

            if(res.obj) {
                if(res.type == 'occupations') {
                    var occupation = jQuery('#current-occupation');
                    occupation.styler('destroy');
                    occupation.append(`<option value="${res.obj.id}">${res.obj.name[site_lang]}</option>`);
                    occupation.styler();
                }
            }
        });
    });
}

function cityCountryChange() {

    // https://github.com/nosir/cleave.js
    // https://catamphetamine.github.io/libphonenumber-js/
    var getLatLngGoogle = function (address) {
        var geocoder = new google.maps.Geocoder();
        return jQuery.Deferred(function(dfrd) {
            geocoder.geocode({'address': address}, function(results, status) {
                if(status === google.maps.GeocoderStatus.OK) {
                    dfrd.resolve(results[0].geometry.location);
                } else {
                    dfrd.reject(new Error(status));
                }
            });
        }).promise();
    }

    jQuery('#city').change(function () {
        var country = jQuery('#country').find('option:selected').text();
        var city = jQuery(this).find('option:selected').text();
        getLatLngGoogle(`${country} ${city}`).done(function (result) {
            jQuery('#location-country-city').val(`${result.lat()},${result.lng()}`);
        });
    });

    jQuery('#country').change(function () {
        jQuery('#city').attr('disabled',true).trigger('refresh');
        jQuery.get(cms_api_url + 'settings/get-location',{ 'type': 'city', 'code': jQuery(this).find('option:selected').data('code') }, function (cities) {
            var city = jQuery('#city');
            city.styler('destroy');
            city.html('');
            city.append(`<option value="" selected disabled hidden>${choose_here}</option>`);
            jQuery.each(cities, function (key,item) {
                city.append(`<option value="${item.id}">${item.name}</option>`);
            });
            city.styler();
            jQuery('#city').attr('disabled',false).trigger('refresh');
        });
    });
}

jQuery(function () {
    form_call('.form-ajax',function (res) {
        if(res.resume_file)
            jQuery('.resume_file_download').attr('href',res.resume_file);
    });
    slim_call();
    summernote();
    intlTelInputInit();
    cityCountryChange();
    addressAutocomplete();
    tagsInputAutocomplete();
});
