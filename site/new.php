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
		</div>
		<div class="span4">
		<?php include_once('../templates/sidebar.php')?>
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
