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
	<script type="text/javascript" src="../script/wdm/showdown.js"></script>
	<script type="text/javascript" src="../script/new.js"></script>
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
				<label>Title</label>
				<input type="text" name="title"/>
				<div id="wmd-button-bar"></div>
				<br/>
				<textarea name="" id="wmd-input"></textarea>
				<br/>
				<span>Preview</span>
				<div id="wmd-preview"></div>
				<br/>
				Visible for ?<br />
				<select name="visibility">
					<option value="private">Private</option>
					<option value="public">Public</option>
					<option value="share">Share with:</option>
				</select><br />
				tags (comma separeted list)<br />
				<input type="text" name="tags"/>
			</form>
		</div>
		<?php include_once('../templates/sidebar.php')?>
	</div>
</div>
<script type="text/javascript" src="../script/wdm/wmd.js"></script>
</body>
</html>
<?php
} else {
	header('Location: /CodeSnippets/site/register.php');
}
?>
