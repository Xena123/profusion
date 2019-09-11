(function($) {
    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    $(document).ready(function() {
        /* .filter_form */
        var ajax_complete = false;
        $('#subscribe_form input[type="submit"]').click(function() {
            if (! ajax_complete) {
                var form_valid = true;
                $('#subscribe_form input[type!="submit"]').each(function() {
                    if ( $(this).val() != '' ) {
                        if ($(this).attr('type') === "email") {
                            /*console.log('Email: ' + $(this).val());
                            console.log(validateEmail( $(this).val()));*/
                            if ( validateEmail( $(this).val() ) ) {
                                $(this).removeClass('field--invalid');
                            } else {
                                $(this).addClass('field--invalid');
                                form_valid = false;
                            }
                        } else {
                            $(this).removeClass('field--invalid');
                        }

                    } else {
                        $(this).addClass('field--invalid');
                        form_valid = false;
                    }
                });

                /*console.log(form_valid);*/
                if (form_valid) {
                    $('#subscribe_form input').removeAttr('style');
                    // console.log('ajax start');
                    var formObj = {
                        email:      $('#subscribe_form input[name="email"]').val(),
                        firstName:  $('#subscribe_form input[name="firstName"]').val()
                    };

                    // form_name:          "subscribe-short-form.php",
                    // form_name:          "subscribe-long-form.php",

                    /*console.log( formObj );*/
                    $.post( 'https://www.profusion.com/wp-content/themes/profusion/form/subscribe-short-form.php', formObj, function(data) {
                        if( data ) {
                            // console.log('AJAX success');
                            /*console.log(data);*/
                            if (data === "\"success\""){
                                $('#subscribe_form').after('<div class="update"><p>Success! We\'ll keep you informed.<br>\n' +
                                    '<br>\n' +
                                    'Thanks for joining our growing community of like-minded thinkers and doers.</p></div>');
                            } else {
                                $('#subscribe_form').after('<div class="update"><p>Failed! Something went wrong. Please, try again later.</p></div>');
                            }
                            $('#subscribe_form').fadeOut();
                        } else {
                            $('#subscribe_form').after('<div class="update"><p>Failed! Something went wrong. Please, try again later.</p></div>');
                            $('#subscribe_form').fadeOut();
                            console.log('AJAX error');
                        }
                        ajax_complete = true;
                    });
                } else {
                    $('#subscribe_form .field--invalid').css({'background':'#fdcfcf'});
                }
            }

            return false;
        });

        $('.message_loading').hide();
        var ajax_complete_2 = false;
        $('#subscribe_form_clone input[type="submit"]').click(function() {
            if (! ajax_complete_2) {

                var form_valid = true;
                $('#subscribe_form_clone input[type!="submit"]').each(function() {
                    if ( $(this).val() != '' ) {
                        if ($(this).attr('type') === "email") {
                            /*console.log('Email: ' + $(this).val());
                            console.log(validateEmail( $(this).val()));*/
                            if ( validateEmail( $(this).val() ) ) {
                                $(this).removeClass('field--invalid');
                            } else {
                                $(this).addClass('field--invalid');
                                form_valid = false;
                            }
                        } else {
                            $(this).removeClass('field--invalid');
                        }

                    } else {
                        $(this).addClass('field--invalid');
                        form_valid = false;
                    }
                });

                // console.log('Form valid:');
                // console.log(form_valid);
                if (form_valid) {
                    $('#subscribe_form_clone .subscribe__inner').fadeOut();
                    setTimeout(function(){
                        $('#subscribe_form_clone .message_loading').fadeIn();
                    }, 400);
                    $('#subscribe_form_clone input').removeAttr('style');
                    // console.log('ajax start');
                    var formObj = {
                        email:      $('#subscribe_form_clone input[name="email"]').val(),
                        firstName:  $('#subscribe_form_clone input[name="firstName"]').val()
                    };

                    // form_name:          "subscribe-short-form.php",
                    // form_name:          "subscribe-long-form.php",

                    // console.log( formObj );
                    $.post( 'https://www.profusion.com/wp-content/themes/profusion/form/subscribe-short-form.php', formObj, function(data) {

                        $('#subscribe_form_clone .message_loading').fadeOut();
                        setTimeout(function() {
                            if( data ) {
                                // console.log('AJAX success');
                                // console.log(data);
                                if (data === "\"success\""){
                                    $('#subscribe_form_clone').after('<div class="update"><p>Success! We\'ll keep you informed.<br>\n' +
                                        '<br>\n' +
                                        'Thanks for joining our growing community of like-minded thinkers and doers.</p></div>');
                                } else {
                                    $('#subscribe_form_clone').after('<div class="update"><p>Failed! Something went wrong. Please, try again later.</p></div>');
                                }
                            } else {
                                $('#subscribe_form_clone').after('<div class="update"><p>Failed! Something went wrong. Please, try again later.</p></div>');
                                console.log('AJAX error');
                            }
                            ajax_complete_2 = true;
                        }, 400);

                    });
                } else {
                    $('#subscribe_form_clone .field--invalid').css({'background':'#fdcfcf'});
                }
            }

            return false;
        });
    });

})(jQuery);