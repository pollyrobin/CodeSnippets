<?php
include_once("../script/db/DbConnectClass.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Codesnippets</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link type="text/css" rel="stylesheet" href="../css/SyntaxHighlighter.css"></link>
<link type="text/css" rel="stylesheet" href="../css/bootstrap.css"></link>
<link type="text/css" rel="stylesheet" href="../css/style.css"></link>

<script language="javascript" src="../script/jquery-1.7.2.min.js"></script>
<script language="javascript" src="../script/bootstrap.js"></script>
<script language="javascript" src="../script/validate/validate.js"></script>
<script language="javascript" src="../script/login/login.js"></script>
<script language="javascript" src="../script/codebrowser/shCore.js"></script>
<script language="javascript" src="../script/codebrowser/shBrushCss.js"></script>
<script language="javascript" src="../script/codebrowser/shBrushJScript.js"></script>
<script language="javascript" src="../script/codebrowser/shBrushPhp.js"></script>
<script language="javascript" src="../script/codebrowser/shBrushXml.js"></script>
<script language="javascript" src="../script/codebrowser/shBrushSql.js"></script>
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
	echo "This might not be a register session :D";
}
?>
		</div>
	</div>
</div>
</body>
</html>
