<?php
session_start();
include_once(dirname(__FILE__) . '/../db/DbConnectClass.php');

if (isset($_POST['user']) && isset($_POST['password'])) {
	$db = new DbConnect('codesnippets');	
	
	$user = mysql_real_escape_string(strip_tags($_POST['user']));
	$password = mysql_real_escape_string(strip_tags($_POST['password']));
	if ($user == "") {
		echo "Please fill in a username or email address";
	} elseif ($password == "") {
		echo "Please fill in a password";
	} else {
		$salt = '$2a$07$yaywhatagreatsalthash$';
		$encryptedpass = crypt($password,$salt);
		$query = "SELECT username,email,password
				  FROM users 
				  WHERE username = '".$user."'
				  AND password = '".$encryptedpass."'
				  OR email = '".$user."' 
				  AND password = '".$encryptedpass."'";
		$result = $db->Query($query);
		if ($test = mysql_num_rows($result) == 1) {
			$_SESSION['user'] = $user;
			echo "You're credentials have been accepted";
		} else {
			echo "No user found with that username and password match";
		}
	}
} else {
	echo "fill in the form before submitting it please";
}
?>
