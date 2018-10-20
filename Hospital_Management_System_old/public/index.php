<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/header.php'); ?>
	<div>
		<div>
		
		</div>
		<div>
			<h2>Log In</h2>
			<form action="logIn.php" method="post">
				<dl>
					<dt>User Name: </dt>
					<dd>
						<input type="text" name="userName" value="" /><br>
					</dd>
				</dl>
				<dl>
					<dt>Password:</dt>
					<dd>
						<input type="password" name="password" /><br>
					</dd>
				</dl>
				<div>
					<input type="submit" name="logIn" value="Log In"/>
				</div>
				<a href="signup.php" >Do not have an account?</a>
			</form>
		</div>
		<div>
		
		</div>		
	</div>
<?php include(SHARED_PATH . '/footer.php'); ?>