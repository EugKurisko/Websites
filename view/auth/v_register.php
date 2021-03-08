<form method="post">
	<div class="form-group">
		<label for="auth-login">Login</label>
		<input type="text" class="form-control" id="auth-login" name="login"> 
	</div>
    <div class="form-group">
		<label for="auth-login">Email</label>
		<input type="text" class="form-control" id="auth-login" name="email"> 
	</div>
    <div class="form-group">
		<label for="auth-login">User Name</label>
		<input type="text" class="form-control" id="auth-login" name="username"> 
	</div>
	<div class="form-group">
		<label for="auth-password">Password</label>
		<input type="password" class="form-control" id="auth-password" name="password"> 
	</div>
    <div class="form-group">
		<label for="auth-password">Confirm Password</label>
		<input type="password" class="form-control" id="auth-password" name="confirmpass"> 
	</div>
	<hr>
	<button class="btn btn-primary">Register</button>
	<?php if($authErr): ?>
		<hr>
		<div class="alert alert-danger">
			Incorrect auth data
		</div>
	<?php endif; ?>
</form>