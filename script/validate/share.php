<?php
include_once("../db/DbConnectClass.php");
$db = new DbConnect('codesnippets');	
if($_POST['share']) {
	$share = mysql_real_escape_string(strip_tags($_POST['share']));
	$query = 'SELECT username 
			  FROM users 
  			  WHERE username = "'.$share.'" OR email = "'.$share.'"';
	if(mysql_num_rows($db->Query($query)) == 0) {
		echo "0";
	}else{
		echo "1";
	}
}


?>
