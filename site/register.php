<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include("/var/www/codesnippets/script/db/DbConnectClass.php");
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
		<div class="span4">
			<form class="well" method="post" action="#">
				<input id="sign-up-email" type="text" class="span3-5" name="email" placeholder="email" /><br />
				<input id="sign-up-password" type="password" class="span3-5" name="password" placeholder="password" /><br />
				<button type="submit" name="login" class="btn btn-info">Login</button>
				<span>&nbsp;Or fill in the form and</span>					
				<a id="sign-up" name="sign-up" data-toggle="modal" href="#signup" class="btn btn-info pull-right">Sign up</a>
			</form>
		</div>
		<div id="signup" class="modal hide fade in custom-modal" style="display: none; ">  
			<div class="modal-header">  
				<a class="close" data-dismiss="modal">×</a>  
				<h3>Did ya think that was all </h3>  
			</div>  
			<div class="modal-body">  
				<h4>Please fill out the rest of the form</h4>  
				<form id="register" class="well well-popup" method="post" action="register.php"> 
					<input type="text" id="name-input" class="span3-5" name="name" placeholder="name">
					<span id="name-validate"></span><br />
					<input type="text" id="email-input" class="span3-5" name="email" placeholder="email" />
					<span id="email-validate"></span><br />
					<input type="text" id="email-verify-input" class="span3-5" name="email-verify" placeholder="verify email" />
					<span id="email-verify-validate"></span><br />
					<input type="password" id="password-input" class="span3-5" name="password" placeholder="password" />
					<div id="password-validate"></div><br />
					<input type="password" id="password-verify-input" class="span3-5" name="password-verify" placeholder="verify password" />
					<span id="password-verify-validate"></span><br />
			</div>  
			<div class="modal-footer"> 
					<span id="form-verify-submit" class="form-alert"></span>
					<button id="form-submit" type="submit" name="sign-up" class="btn btn-info">Sign up</button>
				</form>
				<a href="#" class="btn" data-dismiss="modal">Close</a>  
			</div>
		</div>  
	</div>
	<div class="row">
		<div class="span12">

<?php
if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email'])){

	$db = new DbConnect('codesnippets');	
	
	$name =  strip_tags(mysql_real_escape_string($_POST['name']));
	$password = strip_tags(mysql_real_escape_string($_POST['password']));
	$email = strip_tags(mysql_real_escape_string($_POST['email']));
	$salt = '$2a$07$yaywhatagreatsalthash$';
	$encryptedPass = crypt($password,$salt);

	$query = "INSERT INTO users VALUES('','".$name."','".$encryptedPass."', '".$email."',0)";
	$db->Query($query);
	
}
else{
	echo "Somehow you did not fill in the form please go back and retry";
}
?>
		</div>
	</div>
</div>
</body>
</html>
