<?php
include_once('/codesnippets/script/db/DbConnectClass.php');
			

if (isset($_POST['user']) && isset($_POST['password'])) {
	$db = new DbConnect('codesnippets');	
	
	$user = mysql_real_escape_string(strip_tags($_POST['user']));
	$password = mysql_real_escape_string(strip_tags($_POST['password']));
	$salt = '$2a$07$yaywhatagreatsalthash$';
	$encryptedpass = crypt($password,$salt);
	
	$query = "SELECT password,username,email 
			  FROM users 
			  WHERE username = '".$user."'
			  OR email = '".$email."'";
	$result = $db->Query($query);
		

	
echo "fill in the form before submitting it please";
}

echo "fill in the form before submitting it please";
?>
