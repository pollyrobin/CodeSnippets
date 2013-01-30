<?php
session_start();
include_once("../script/db/DbConnectClass.php");
if (isset($_SESSION['user'])) {
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Codesnippets</title>
	<?php include_once('../templates/header.php'); ?>
	<link rel="stylesheet" type="text/css" href="../css/wmd.css" />
	<!--<link rel="stylesheet" type="text/css" href="../css/tokeninput/token-input.css" />-->
	<link rel="stylesheet" type="text/css" href="../css/tokeninput/token-input-facebook.css" />
	<script type="text/javascript" src="../script/wdm/showdown.js"></script>
	<script type="text/javascript" src="../script/new.js"></script>
	<script type="text/javascript" src="../script/tokeninput/jquery.tokeninput.js"></script>
	
</head>
<body>
<?php include_once('../templates/nav.php'); ?>
<div class="container">
	<div class="row">
		<div class="span8">
			<div class="page-header">
  				<h2>LOGGED IN AREA :D</h2>
			</div>
		</div>
		<div class="span4">
			<div class="page-header">
  				<h2>sidebar </h2>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span8">
			hierzo code plus uitleg
			<form method="post" action="add-new.php">
				<p>Title</p>
				<input type="text" name="title"/>
				<div id="wmd-button-bar"></div>
				<br/>
				<textarea name="" id="wmd-input"></textarea>
				<br/>
				<p>Preview</p>
				<div id="wmd-preview"></div>
				<br/>
				<p>Visible for ?</p>
				<select name="visibility">
					<option value="private">Private</option>
					<option value="public">Public</option>
				</select>
				<p>Share with:  add typehead from bootstrap :D	</p>
				<span class="share-with-container">
					<input class="share-input" type="text" name="share-with[]" placeholder="username or email" /><i id="add-share" class="icon-plus-sign icon-edit"> </i>
				</span>
				<p>tags (comma separeted list)</p>
				<input type="text" id="demo-input-facebook-theme" name="tags" /></br >
					<script type="text/javascript">
					$(document).ready(function() {
						$("#demo-input-facebook-theme").tokenInput("../script/tokeninput/getlist.php", {
							theme: "facebook",
							propertyToSearch: "username" 
						});
					});
					</script>
			</form>
		</div>
		<?php include_once('../templates/sidebar.php');	?>
	
	</div>
</div>
<script type="text/javascript" src="../script/wdm/wmd.js"></script>
</body>
</html>
<?php
} else {
	header('Location: /CodeSnippets/index.php');
}
?>
