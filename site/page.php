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
<<<<<<< HEAD
		<div class="span12">
			Welcome <?php echo $_SESSION['user']; ?> 
			links  <---- overzicht van de code post blog whatever 
			rechts ----> overzicht van de verschillende opties die de gebruiker heeft ala   talen en dergelijke
=======
		<div class="span8">
			<form>
		</div>
		<div class="span4">
			<?php include_once('../templates/sidebar.php'); ?>
>>>>>>> 161b7a04aad995f27f57ab13f3ea73ae00c04efc
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
