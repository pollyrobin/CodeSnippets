<?php
session_start();
?>
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
			<?php if (isset($_SESSION['user']) ) { ?>
			<ul class="nav pull-right">
				<li><span class="navbar-text">Logged in as: <a href="#"></a></span></li>
			  	<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php echo $_SESSION['user']; ?>
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
					  <li><a href="#">Linklike</a></li>
					  <li><a href="#">userprofile</a></li>
					  <li><a href="/CodeSnippets/site/logout.php">Logout</a></li>
					</ul>
			  	</li>
			</ul>
			<?php } ?>
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
		<?php if (isset($_SERVER) ) {
			include_once('site/login-signup.php');
		}?>
	</div>
</div>
			
	
			<!--<textarea name="code" class="php" cols="60" rows="10">
			<?php 
				//echo "code"; 
				//$arr = array("blaat" => "test", "test" => "blaat");   
			?>
			</textarea>-->
<script language="javascript">
dp.SyntaxHighlighter.ClipboardSwf = '/flash/clipboard.swf';
dp.SyntaxHighlighter.HighlightAll('code');
</script>
</body>
</html>
