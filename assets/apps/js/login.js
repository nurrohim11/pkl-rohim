"use strict";

// Class Definition
var KTLoginV1 = function () {
    var login = $('#kt_login');

    var showErrorMsg = function(form, type, msg) {
        var alert = $('<div class="alert alert-bold alert-solid-' + type + ' alert-dismissible" role="alert">\
            <div class="alert-text">'+msg+'</div>\
            <div class="alert-close">\
                <i class="flaticon2-cross kt-icon-sm" data-dismiss="alert"></i>\
            </div>\
        </div>');

        form.find('.alert').remove();
        alert.prependTo(form);
        KTUtil.animateClass(alert[0], 'fadeIn animated');
    }

    // Private Functions
    var handleSignInFormSubmit = function () {
        $('#kt_login_signin_submit').click(function (e) {
            e.preventDefault();

            var btn = $(this);
            var form = $('#kt_login_form');
            var formData = $('#kt_login_form').serialize();
            console.log(formData);

            form.validate({
                rules: {
                    username: {
                        required: true
                    },
                    password: {
                        required: true
                    }
                }
            });

            if (!form.valid()) {
                return;
            }

            KTApp.progress(btn[0]);

            setTimeout(function () {
                KTApp.unprogress(btn[0]);
            }, 2000);

            // ajax form submit:  http://jquery.malsup.com/form/
            form.ajaxSubmit({
                url: base_url+'login/authentication?'+formData,
                success: function(response, status, xhr, $form) {
                    response = JSON.parse(response);
                    var response_status = response.status;
                    var message = response.message;

                    var alert = (response_status == true) ? 'success' : 'danger';

                    // similate 2s delay
                    setTimeout(function() {
                        btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
                        showErrorMsg(form, alert, message);
                        if (response_status == true) {
                            window.location.reload();
                        }
                    }, 2000);
                    
                }
            });
        });
    }

    // Public Functions
    return {
        // public functions
        init: function () {
            handleSignInFormSubmit();
        }
    };
}();

// Class Initialization
jQuery(document).ready(function () {
    KTLoginV1.init();
});
