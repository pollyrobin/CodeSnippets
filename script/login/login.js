$(function(){
	$.ajaxSetup({
		cache: false
	});

	$('#login-button').click(function(event){
		event.preventDefault();
		var user = $('#sign-up-email').val();
		var password = $('#sign-up-password').val();
		$.post('/CodeSnippets/script/login/login.php', {
			user: user,
			password: password
		}, function(validate_credentials) {
			$('#login-warnings').html(validate_credentials);
		});	
	});
});
