<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/header.php'); ?>
	<div>
		<h2>Sign Up</h2>
		<div>
			<form action="create.php" method="post">
				<dl>
					<dt>First Name: </dt>
					<dd>
						<input type="text" name="fName" value="" /><br>
					</dd>
				</dl>
				<dl>
					<dt>Last Name: </dt>
					<dd>
						<input type="text" name="lName" value="" /><br>
					</dd>
				</dl>
				<dl>
					<dt>Email: </dt>
					<dd>
						<input type="text" name="email" value="" /><br>
					</dd>
				</dl>
				<dl>
					<dt>Date of Birth: </dt>
					<dd>
						<input type="date" name="dob" value="" /><br>
					</dd>
				</dl>
				<dl>
					<dt>Password: </dt>
					<dd>
						<input type="password" name="password" /><br>
					</dd>
				</dl>
				<div>
					<input type="submit" name="signUp" value="Create Account" />
				</div>
			</form>
		</div>		
	</div>
<?php include(SHARED_PATH . '/header.php'); ?>
