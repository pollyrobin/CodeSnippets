<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Codesnippets</title>
<?php include_once('templates/header.php'); ?>
</head>
<body onload="prettyPrint()">
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<ul class="nav">
				<li class="active"><a href="/CodeSnippets/">Home</a></li>
			</ul>
			<?php if (isset($_SESSION['user']) ) { ?>
			<ul class="nav pull-right">
				<li><span class="navbar-text">Logged in as: </span></li>
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
		<?php if (isset($_SESSION['user']) ) {
			include_once('templates/sidebar.php');
		} else {
			include_once('site/login-signup.php');
		}
		?>
	</div>
	<div class="row">
		<div class="span8">
			<pre class="prettyprint linenums">&lt;?php
	echo "code"; 
	$arr = array("blaat" => "test", "test" => "blaat");   

	SELECT blabla FROM je moeder WHERE 1= '2'
?&gt;
			</pre>
		</div>
		<div class="span4">

		</div>
	</div>

</div>

</body>
</html>
