<?php 
session_start();
require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/header.php'); ?>
	<div class="container">
		<div class="row">
			
    		<div class="col">
    			<form action="DB_logIn.php" method="post">
    				<div class="form-group row">
    					<div class="col-sm"></div>
    					<div class="col-sm">
    						<h2>Log In</h2>
    						<?php     						
    						    if(!$_SESSION['userType']){
    						        echo "<div style=\"color:red\">Invalid credentials</div>\n";
    						    }
    						?>
    						<dl>
    							<dt><label class="form-control-label">Email: </label></dt>
    							<dd>
    								<input class="form-control input-sm" type="text" name="email" value="" /><br>
    							</dd>
    						</dl>
    						<dl>
    							<dt><label class="form-control-label">Password: </label></dt>
    							<dd>
    								<input class="form-control input-sm" type="password" name="password" /><br>
    							</dd>
    						</dl>
    						<div>
    							<input class="btn btn-primary btn-lg ladda-button" type="submit" name="logIn" value="Log In"/>
    						</div>
    						<a href="GUI_SignUp.php" class="font-italic mt-4">Do not have an account?</a>
    					</div>
    					<div class="col-sm"></div>
    				</div>
    			</form>
    		</div>
    		<div>
    		
    		</div>
    		<
		</div>		
	</div>
<?php include(SHARED_PATH . '/footer.php'); ?>