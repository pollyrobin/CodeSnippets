<?php
session_start();
include_once("../script/db/DbConnectClass.php");
if (isset($_SESSION['user'])) {
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
		</div>
  	</div>
</div>
<div class="container">
	<div class="row">
		<div class="span12">
			<div class="page-header">
  				<h2>LOGGED IN AREA :D</h2>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			Welcome <?php echo $_SESSION['user']; ?> 
			links  <---- overzicht van de code post blog whatever 
			rechts ----> overzicht van de verschillende opties die de gebruiker heeft ala   talen en dergelijke
		</div>
	</div>
</div>
</body>
</html>
<?php
} else {
	header('Location: /CodeSnippets/site/register.php');
}
?>
