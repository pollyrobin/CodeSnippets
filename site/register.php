<?php
include_once("../script/db/DbConnectClass.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Codesnippets</title>
<?php include_once('../templates/header.php'); ?>
</head>
<body>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<ul class="nav">
				<li class="active"><a href="#">Home</a></li>
			</ul>
		</div>
  	</div>
</div>
<div class="container">
	<div class="row">
		<div class="span8">
			<div class="page-header">
  				<h2>Register</h2>
			</div>
		</div>
		<?php include_once('login-signup.php')?>
	</div>
	<div class="row">
		<div class="span12">

<?php
if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email'])){

	$db = new DbConnect('codesnippets');	
	
	$username =  strip_tags(mysql_real_escape_string($_POST['name']));
	$password = strip_tags(mysql_real_escape_string($_POST['password']));
	$email = strip_tags(mysql_real_escape_string($_POST['email']));
	$salt = '$2a$07$yaywhatagreatsalthash$';
	$encryptedPass = crypt($password,$salt);

	$existquery = "SELECT username, email
				   FROM users 
				   WHERE username = '".$username."' 
				   		OR email = '".$email."'";
	$rows = mysql_num_rows($db->Query($existquery));	
	if($rows != 0){
		echo "for some reason your username of email is already in use \n please fill in the form again";
	}else{
		$query = "INSERT INTO users VALUES('','".$username."','".$encryptedPass."', '".$email."',0)";
		$db->Query($query);
	?>
		<div class="register-message">
			You have succesfully created an account.
			You might get a welcome email or such with a validation link.
		</div>
	<?php
	}

}
else{
	echo "Something went wrong, please try to register again. If this problem persists notify the admin";
}
?>
		</div>
	</div>
</div>
</body>
</html>
