function signUp(user, password){
	var isemail = user.search('@');
	console.log(isemail);
	if (isemail != -1)	{
		$('#email-input').val(user);
	} else {
		$('#name-input').val(user);
	}
	$('#password-input').val(password);
}

function nameValidation(name_input){
	$.post('/CodeSnippets/script/validate/validate.php', {
		name_input: name_input
	}, function(validate_name) {
		var alertcolor = "alert-error";
		if(validate_name == "Way to go"){
			alertcolor = "alert-success";
		}	
		$('#name-validate').html(validate_name);
		$('#name-validate').attr('class', "alert " + alertcolor);

	});
}

function emailValidation(email_input){
	$.post('/CodeSnippets/script/validate/validate.php', {
		email_input: email_input
	}, function(validate_email) {
		var alertcolor = "alert-error";
		if(validate_email == "Good job"){
			alertcolor = "alert-success";
		}
		$('#email-validate').html(validate_email);
		$('#email-validate').attr('class', "alert " + alertcolor);
	});
} 

function emailChange(email_verify_input, email_input){
	$.post('/CodeSnippets/script/validate/validate.php', {
		email_verify_input: email_verify_input,
		email_input: email_input
	}, function(validate_verify_email) {
		var alertcolor = "alert-error";
		if(validate_verify_email == "Yay email matched"){
			alertcolor = "alert-success";
		}
		$('#email-verify-validate').html(validate_verify_email);
		$('#email-verify-validate').attr('class', "alert " + alertcolor);
	});
}

function emailVerifyValidate(email_verify_input, email_input){
	$.post('/CodeSnippets/script/validate/validate.php', {
		email_verify_input: email_verify_input,
		email_input: email_input
	}, function(validate_verify_email) {
		var alertcolor = "alert-error";
		if(validate_verify_email == "Yay email matched"){
			alertcolor = "alert-success";
		}
		$('#email-verify-validate').html(validate_verify_email);
		$('#email-verify-validate').attr('class', "alert " + alertcolor);
	});
}

function passwordValidate(password_input){
	$.post('/CodeSnippets/script/validate/validate.php', {
		password_input: password_input
	}, function(validate_password) {
		var alertcolor = "alert-error";
		if($.isNumeric(validate_password) == true){
			var progress_color = 'progress-danger';
			var progress = Math.round(validate_password * 16.666666667);
			if(progress == 50){
				progress_color = 'progress-warning';
			}				
			if(progress == 67){
				progress_color = 'progress-info';
			}
			if(progress > 67){
				progress_color = 'progress-success';
			}
			$('#password-validate').attr('class', 'progress '+ progress_color +' progress-striped');
			$('#password-validate').html('<div class="bar" style="width:'+ progress +'%;"></div>');
		}else{
			$('#password-validate').html(validate_password);
			$('#password-validate').attr('class', "alert " + alertcolor);
		}
	});
}

function passwordVerify(password_input, password_verify_input){
	$.post('/CodeSnippets/script/validate/validate.php', {
		password_input: password_input,
		password_verify_input: password_verify_input
	}, function(validate_verify_password) {
		var alertcolor = "alert-error";
		if(validate_verify_password == 'passmatch'){
			alertcolor = "alert-success";
		}
		$('#password-verify-validate').html(validate_verify_password);
		$('#password-verify-validate').attr('class', 'alert ' + alertcolor);
	});
}
$(function(){
	$.ajaxSetup({
		cache: false
	});
	
	//Copy values to new form
	$('#sign-up').click(function(){
		var email = $('#sign-up-email').val();
		var password = $('#sign-up-password').val();
		signUp(email, password);
	});	

	//Name validation
	$('#name-input').change(function(){
		var name_input = $('#name-input').val(); 
		nameValidation(name_input);	
	});

	//Email validation
	$('#email-input').change(function(){
		var email_input = $('#email-input').val(); 
		emailValidation(email_input);
	});

	//if email input has changed check if it still matches with email verification
	$('#email-input').change(function(){
		var email_verify_input = $('#email-verify-input').val(); 
		var email_input = $('#email-input').val(); 
		emailChange(email_verify_input, email_input);	
	});

	//Email verify & validation
	$('#email-verify-input').change(function(){
		var email_verify_input = $('#email-verify-input').val(); 
		var email_input = $('#email-input').val(); 
		emailVerifyValidate(email_verify_input, email_input);
	});

	//Email validation
	$('#email-verify-input').change(function(){
		var email_input = $('#email-input').val(); 
		emailValidation(email_input);
	});

	//first password check
	$('#password-input').keyup(function(){
		var password_input = $('#password-input').val();
		if(password_input != ""){
			passwordValidate(password_input);
		}
	});
	
	//verify second password
	$('#password-verify-input').keyup(function(){
		var password_input = $('#password-input').val();
		var password_verify_input = $('#password-verify-input').val();
		if(password_verify_input != ""){
			passwordVerify(password_input, password_verify_input);
		}
	});
	//verify second password
	$('#password-input').keyup(function(){
		var password_input = $('#password-input').val();
		var password_verify_input = $('#password-verify-input').val();
		if(password_verify_input != ""){
			passwordVerify(password_input, password_verify_input);
		}
	});
	$('#form-submit').click(function(submit){
		submit.preventDefault();
		var form_submit = "sign-up";	
		var name_input = $('#name-input').val();
		var email_verify_input = $('#email-verify-input').val(); 
		var email_input = $('#email-input').val(); 
		var password_input = $('#password-input').val();
		var password_verify_input = $('#password-verify-input').val();

		$.post('/CodeSnippets/script/validate/validate.php', {
			form_submit: form_submit,
			name_input: name_input,
			email_verify_input: email_verify_input,
			email_input: email_input,
			password_input: password_input,
			password_verify_input: password_verify_input
		}, function(validate_form) {
			$('#form-verify-submit').html(validate_form);
			if(validate_form != "your awesome in filling in a form"){
				$('#form-verify-submit').attr('class', 'form-alert alert alert-error');	
			}else{
				$('#form-verify-submit').attr('class', 'form-alert alert alert-success');	
				$('#register').submit();
			}
			nameValidation(name_input);	
 			emailValidation(email_input);
			emailChange(email_verify_input, email_input);
			emailVerifyValidate(email_verify_input, email_input);
			passwordValidate(password_input);
			passwordVerify(password_input, password_verify_input);
		});
	});
});
