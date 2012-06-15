<?php
include("/var/www/codesnippets/script/validate/Validator.php");
$Validator = new Validator();	

if(isset($_POST['form_submit'])){
	$fullform = 1;
	$name = $_POST['name_input'];
	$email = $_POST['email_input'];
	$verifyemail = $_POST['email_verify_input'];
	$password = $_POST['password_input'];
	$verifypassword = $_POST['password_verify_input'];

	echo $Validator->ValidateFullForm($name, $email, $verifyemail, $password, $verifypassword, $fullform);
}else{
	$fullform = 0;
	if(isset($_POST['name_input'])){
		$name = $_POST['name_input'];
		echo $Validator->ValidateName($name, $fullform);
	}

	if(isset($_POST['email_input']) && !isset($_POST['email_verify_input'])){
		$email = $_POST['email_input'];
		echo $Validator->ValidateEmail($email, $fullform);
	}

	if(isset($_POST['email_input']) && isset($_POST['email_verify_input'])){
		$email = $_POST['email_input'];
		$verifyemail = $_POST['email_verify_input'];
		echo $Validator->ValidateVerifiedEmail($email, $verifyemail, $fullform);	
	}

	if(isset($_POST['password_input']) && !isset($_POST['password_verify_input'])){
		$password = $_POST['password_input'];
		echo $Validator->ValidatePassword($password, $fullform);
	}

	if(isset($_POST['password_input']) && isset($_POST['password_verify_input'])){
		$password = $_POST['password_input'];
		$verifypassword = $_POST['password_verify_input'];
		echo $Validator->ValidateVerifyPassword($password, $verifypassword, $fullform);
	}
}
?>
