<!DOCTYPE HTML>
<html>
<head>
<title>Codesnippets</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link type="text/css" rel="stylesheet" href="css/SyntaxHighlighter.css"></link>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"></link>
<link type="text/css" rel="stylesheet" href="css/style.css"></link>

<script language="javascript" src="script/jquery-1.7.2.min.js"></script>
<script language="javascript" src="script/bootstrap.js"></script>
<script language="javascript" src="script/validate/validate.js"></script>
<script language="javascript" src="script/login/login.js"></script>
<script language="javascript" src="script/codebrowser/shCore.js"></script>
<script language="javascript" src="script/codebrowser/shBrushCss.js"></script>
<script language="javascript" src="script/codebrowser/shBrushJScript.js"></script>
<script language="javascript" src="script/codebrowser/shBrushPhp.js"></script>
<script language="javascript" src="script/codebrowser/shBrushXml.js"></script>
<script language="javascript" src="script/codebrowser/shBrushSql.js"></script>
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
  				<h1>Yay wat een mooie login hier --></h1>
			</div>
		</div>
		<div class="span4">
			<form class="well" method="post" action="#">
				<input id="sign-up-email" type="text" class="span3-5" name="email" placeholder="Username or email" /><br />
				<input id="sign-up-password" type="password" class="span3-5" name="password" placeholder="Password" /><br />
				<span id="login-warnings"></span>
				<button id="login-button" type="submit" name="login" class="btn btn-info">Login</button>
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
				<form id="register" class="well well-popup" method="post" action="site/page.php"> 
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
</div>





			<!--


			<textarea name="code" class="php" cols="60" rows="10">
			<?php 
				echo "code"; 
				$arr = array("blaat" => "test", "test" => "blaat");   
			?>
			</textarea>-->
<script language="javascript">
dp.SyntaxHighlighter.ClipboardSwf = '/flash/clipboard.swf';
dp.SyntaxHighlighter.HighlightAll('code');
</script>
</body>
</html>
