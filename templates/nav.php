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
