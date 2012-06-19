<?php
Class Validator
{
	public function ValidateName($username, $fullform)
	{
		if ($username != "") {
			include_once('../db/DbConnectClass.php');
			$db = new DbConnect('codesnippets');	
			$username = strip_tags(mysql_real_escape_string($username));
			$query = "SELECT * FROM users WHERE username = '".$username."'";
			$result = $db->Query($query);
			
			if (mysql_num_rows($result) > 0) {
				$return = "Username already in use";
				$returncode = 0;
			} elseif (strlen($username) < 2) {
				$return = "Im certain your name is longer";
				$returncode = 0;
			} elseif (preg_match_all("/[^a-zA-Z0-9]/",$username, $matched_preg)!== 0) {
				$return = "please use only letters & cijfers";
				$returncode = 0;
			} else {
				$return = "Way to go";
				$returncode = 1;
			}
		} else {	
			$return = "You have no name?";
			$returncode = 0;
		}
		if ($fullform == 0) {
			return $return;
		} else {
			return $returncode;
		}
	}
	
	public function ValidateEmail($email, $fullform)
	{
		if($email == ""){	
			$return = "Everyone has an email address";
			$returncode = 0;
		}elseif(preg_match("~^[a-z0-9][a-z0-9_.\-]*@([a-z0-9]+\.)*[a-z0-9][a-z0-9\-]+\.([a-z]{2,6})$~i", $email) == 1){	
			include_once('../db/DbConnectClass.php');
			$db = new DbConnect('codesnippets');	
			$email = strip_tags(mysql_real_escape_string($email));
			$query = "SELECT * FROM users WHERE email = '".$email."'";
			$result = $db->Query($query);
			if(mysql_num_rows($result) > 0){
				$return = "Email in use";
				$returncode = 0;
			}else{	
				$return = "Good job";
				$returncode = 1;
			}
		}else{
			$return = "Invalid email address";
			$returncode = 0;
		}
		if($fullform == 0){
			return $return;
		}else{
			return $returncode;
		}
	}	

	public function ValidateVerifiedEmail($email, $verifyemail, $fullform)
	{
		if($verifyemail == ""){
			$return = "Please verify your email";
			$returncode = 0;
		}elseif(preg_match("~^[a-z0-9][a-z0-9_.\-]*@([a-z0-9]+\.)*[a-z0-9][a-z0-9\-]+\.([a-z]{2,6})$~i", $verifyemail) != 1){
			$return = "Invalid email address";	
			$returncode = 0;
		}elseif($email == $verifyemail){	
			$return = "Yay email matched";	
			$returncode = 1;
		}else{
			$return = "Ahw email doesn't match";
			$returncode = 0;
		}
		if($fullform == 0){
			return $return;
		}else{
			return $returncode;
		}
	}	

	public function ValidatePassword($password, $fullform)
	{
		if($password == ""){
			$return = "You cant use an empty password";
			$returncode = 0;
		}else{
			$passpower = 0;
			if(preg_match('/[a-z]/', $password) == 1){
				$passpower++;
			}
			if(preg_match('/[A-Z]/', $password) == 1){
				$passpower++;
			}
			if(preg_match('/[0-9]/', $password) == 1){
				$passpower++;
			}
			if(preg_match('/[\ ]/', $password) == 1){
				$passpower++;
			}
			if(preg_match('/[^a-zA-Z0-9\ ]/', $password) == 1){
				$passpower++;
			}
			if(strlen($password) >= 10){
				$passpower++;
			}
			$return = $passpower;
			$returncode = 1;
		}
		if($fullform == 0){
			return $return;
		}else{
			return $returncode;
		}
	}
	
	public function ValidateVerifyPassword($password, $verifypassword, $fullform)
	{
		if($password == ""){
			$return = "please verify your password";
			$returncode = 0;
		}elseif(strlen($password) < 6){
			$return = "too short man moar then 5";
			$returncode = 0;
		}elseif($password == $verifypassword){
			$return = "passmatch";
			$returncode = 1;
		}else{
			$return = "Invalid password";
			$returncode = 0;
		}
		if($fullform == 0){
			return $return;
		}else{
			return $returncode;
		}
	}
	
	public function ValidateFullForm($name, $email, $verifyemail, $password, $verifypassword, $fullform)
	{	
		$returnCode = 0;
		$returnCode += $this->ValidateName($name, $fullform);
		$returnCode += $this->ValidateEmail($email, $fullform);
		$returnCode += $this->ValidateVerifiedEmail($email, $verifyemail, $fullform);
		$returnCode += $this->ValidatePassword($password, $fullform);
		$returnCode += $this->ValidateVerifyPassword($password, $verifypassword, $fullform);
		
		if($returnCode < 5){
			$return = "Please fix errors";
		}else{
			$return = "your awesome in filling in a form";
		}
		return $return;
	}

}
?>
