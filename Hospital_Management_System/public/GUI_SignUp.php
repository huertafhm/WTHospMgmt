<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/header.php'); ?>
	<div class="container">
		<h2>Sign Up</h2>
		<div>
			<form action="./DB_RegisterPatient.php" method="post">
				<fieldset class="form-group">
    				<div class="form-group row mt-4">
            			<label class="col-form-label col-md-2">Name</label>
            			<div class="col-md-4">
            				<input class="form-control" type="text" name="name" />
            			</div>
            			<label class="col-form-label col-md-2">Mobile</label>
            			<div class="col-md-4">
            				<input class="form-control" type="text" name="mobile" />
            			</div>
    				</div>
            		<div class="form-group row">
            			<label class="col-form-label col-md-2">Email</label>
            			<div class="col-md-4">
            				<input class="form-control" type="text" name="email" />
            			</div>
            			<label class="col-form-label col-md-2">Age</label>
            			<div class="col-md-4">
            				<input class="form-control" type="text" name="age" />
            			</div>
            		</div>
            		<div class="form-group row">
            			<label class="col-form-label col-md-2">Gender</label>
            			<div class="col-md-4">
            				<select name="gender" class="form-control">
    							<option>Male</option>
    							<option>Female</option>
    						</select>
            			</div>
            			<label class="col-form-label col-md-2">Password</label>
            			<div class="col-md-4">
            				<input class="form-control" type="password" name="password" />
            			</div>
            		</div>
            		<div class="form-group row">
            			<div class="col-md-10"></div>
            			<div class="col-md-2">
    						<input style="float: right" class="btn btn-primary btn-lg ladda-button" type="submit" name="signUp" value="Create Account" />
    					</div>
    				</div>
    				<a style="float: right" href="index.php" class="font-italic">Already have an account?</a>
    			</fieldset>
			</form>
		</div>		
	</div>
<?php include(SHARED_PATH . '/footer.php'); ?>
