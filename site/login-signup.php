<div class="span4">
	<form class="well" method="post" action="#">
		<input id="sign-up-email" type="text" class="span3-5" name="email" placeholder="Username or email address" /><br />
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
		<form id="register" class="well well-popup" method="post" action="site/register.php"> 
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
