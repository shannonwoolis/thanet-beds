// binds $ to jquery, requires you to write strict code. Will fail validation if it doesn't match requirements.
(function($) {
    "use strict";

	// add all of your code within here, not above or below
	$(function() {

        // --------------------------------------------------------------------------------------------------
		// Forms
		// --------------------------------------------------------------------------------------------------
        // function setCookie(cname, cvalue, exdays) {
        //     const d = new Date();
        //     d.setTime(d.getTime() + (exdays*24*60*60*1000));
        //     let expires = "expires="+ d.toUTCString();
        //     document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        // }

        var postcodeField = $('#postcode');
        var postcodeSubmit = $('#postcodeSubmit');
        var addButton = $('.single_variation_wrap button[type="submit"]');
        addButton.prop('disabled', true);
        
        function updatePostcode() {
            var postcode = postcodeField.val().toLowerCase().replace(/\s/g, '');
            var start = postcode.slice(0,-3);
            var checkoutForm = $("#cartWrapper");
            var success = $("#success");
            var error = $("#error");
            var postcodeForm = $("#postcode-checker");
            var delivery = false;

            if(postcode){
                $.getJSON( "/wp-content/themes/thanet-bedz/postcodes.json", function( data ) {
                    $.each( data, function( key, val ) {
                        var loc = val.location_code.toLowerCase();

                        if( loc && loc.indexOf(start) >= 0 ) {
                            delivery = true;
                            console.log(start);
                        }
                    });
                    if(delivery) {
                        success.removeClass('hidden').addClass('block');
                        error.addClass('hidden').removeClass('block');
                        // postcodeForm.addClass('hidden');
                        checkoutForm.removeClass('hidden');
                        addButton.prop('disabled', false);
                    } else {
                        error.removeClass('hidden').addClass('block');
                        success.addClass('hidden').removeClass('block');
                        // postcodeForm.removeClass('hidden');
                        checkoutForm.addClass('hidden');
                        addButton.prop('disabled', true);
                    }
                });
            }

        }

        // console.log(postcodeField);

        postcodeSubmit.on('click', function(e) {
            e.preventDefault();
            updatePostcode();
        });
        // $('#lookup_field').on('change', '#idpc_dropdown', function () {
        //     updatePostcode();
        // });

	});

}(jQuery));

