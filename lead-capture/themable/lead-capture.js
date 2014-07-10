// ajax function to validate form
jQuery(document).ready(function($) {

	$(document).ajaxStart(function() {
		// show spinner
		$('#result').html('<div class="loader"></div>');
	}).ajaxStop(function() {
		// remove spinner when ajax is complete
		$('#capture_form .loader').remove();
	}).ajaxError(function(a, b, e) {
		console.log(e);
	});
	
	
	/*
	 * TO ADD VALIDATION RULES:
	 * 	1. Add rule code below & change the name as appropriate;
	 * 	2. Add myPostcodeValidationRule="true" as an attribute of the form input you want to apply it to (with the new name substituted).
	 *
		jQuery.validator.addMethod("myPostcodeValidationRule", function(value, element, params) { 
			return (value!="POSTCODE") && (value.length>3) && (value.length<6) && !isNaN(value);
		}, jQuery.format("Please enter a valid postcode"));
	*/
	
	jQuery.validator.addMethod("nameNotDefault", function(value, element, params) { 
		return (value!="Name") && (value.length>1);
	}, jQuery.format("Please enter your name"));

	// use validate js plugin to validate first form
	$('#capture_form').validate({
		
		submitHandler: function(form) {
			$(form).ajaxSubmit({
				success: function(result) {
					$('#result').hide().html(result).delay(300).slideDown();
					$('#capture_form ul').slideUp(300);
					
					//if second form exists & first form was a success, set up second form
					if( ($('#capture_form_part_two').length>0) && ($('#result .new_user').length>0) ) {
						var new_id = $('#result .new_user').text();
						$('#result_two input[name="new_user"]').val(new_id);

						//hide first form thank-you
						$('#capture_form').delay(1700).slideUp(300);
						//show & activate second form
						$('#capture_form_part_two').delay(2000).slideDown(300).ajaxForm({
							success: function(result_two) {
								$('#result_two').html(result_two);
								$('#capture_form_part_two ul').delay(600).slideUp(300);
							}
						});
					}
				}
			});
		}
	
	});
	
	
	$('#capture_form_outer input').focus(function() {
		if(input_default(this)) $(this).val('');
	});
	
	$('#capture_form_outer input').blur(function() {
		if ($(this).val() == "") {
			var defVal = $(this)[0].defaultValue; 
			$(this).val(defVal);
		} 
	});
	
	
	//returns whether or not an input element currently has it's default value
	function input_default(inputElement) {
		var defVal = $(inputElement)[0].defaultValue; 
		var currVal = $(inputElement).val();
		
		return defVal==currVal;
	}

});