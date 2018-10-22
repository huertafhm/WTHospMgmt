<?php 
    require_once('../private/initialize.php'); 
    include(SHARED_PATH . '/header.php');
    
    //Handle form values sent by signup.php for for signing up
    $patientName = isset($_POST['name']) ? $_POST['name'] : "";
    $patientMobile = isset($_POST['mobile']) ? $_POST['mobile'] : "";;
    $patientEmail = isset($_POST['email']) ? $_POST['email'] : "";;
    $patientAge = isset($_POST['age']) ? $_POST['age'] : "";;
    $patientGender = isset($_POST['gender']) ? $_POST['gender'] : "";;
    $patientpassword = isset($_POST['password']) ? $_POST['password'] : "";;
    $alreadySubmitted = isset($_POST['submitted']) ? $_POST['submitted'] : false;;
    $errorData = false;
    
    $regexpName = "/^[A-Za-z]{2,} [A-Za-z]{2,}/";
    if (!preg_match($regexpName,$patientName) && $alreadySubmitted) {
        $errorData = true;
        echo "<script type=\"text/javascript\">window.alert('Insert your full name');</script>";
    } 
    
    $regexpMobile = "/\+?[0-9]{10,13}$/";
    if (!preg_match($regexpMobile,$patientMobile) && $alreadySubmitted) {
        $errorData = true;
        echo "<script type=\"text/javascript\">window.alert('Insert your 10-digit phone');</script>";
    }
    
    $regexpEmail = "/^(([^<>()\[\]\\.,;:\s@\"]+(\.[^<>()\[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
    if (!preg_match($regexpEmail,$patientEmail) && $alreadySubmitted) {
        $errorData = true;
        echo "<script type=\"text/javascript\">window.alert('Insert a valid e-mail');</script>";
    }
    
    $regexpAge = "/^(0?[1-9]|[1-9][0-9]|[1][0-2][0-9]|130)$/";
    if (!preg_match($regexpAge,$patientAge) && $alreadySubmitted) {
        $errorData = true;
        echo "<script type=\"text/javascript\">window.alert('Insert your age');</script>";
    }
    
    $regexpPassword = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";
    if (!preg_match($regexpPassword,$patientpassword) && $alreadySubmitted) {
        $errorData = true;
        echo "<script type=\"text/javascript\">window.alert('Password must contain a minimum of 8 characters, a letter and a number');</script>";
    } 
    
    //SQL command to insert values
    $sql = "INSERT INTO patient ";
    $sql .= "(name, phone, email, age, gender, password) ";
    $sql .= "VALUES (";
    $sql .= "'" . $patientName . "',";
    $sql .= "'" . $patientMobile . "',";
    $sql .= "'" . $patientEmail . "',";
    $sql .= "'" . $patientAge . "',";
    $sql .= "'" . $patientGender . "',";
    $sql .= "MD5('" . $patientpassword . "')";
    $sql .= ")";
    
    //SQL command to check existing mail
    $sqlPatientExists = "SELECT count(patientId) as result FROM patient where email = '$patientEmail'";
    $sqlDoctorExists = "SELECT count(doctorId) as result FROM doctor where email = '$patientEmail'";
    
    //Retrieve results if email is already registered in any of the tables
    $error = mysqli_query($db, $sqlPatientExists);
    $error = mysqli_fetch_assoc($error);
    $error = $error['result'];
    $error2 = mysqli_query($db, $sqlDoctorExists);
    $error2 = mysqli_fetch_assoc($error2);
    $error2 = $error2['result'];
    
    //If there were records, display an alert message
    if ($error || $error2){
        
        echo "<script type=\"text/javascript\">window.alert('That email is already registered!');
        window.location.href = './GUI_SignUp.php';</script>";
        
    } else if (!$errorData && $patientName != "" && $patientMobile != "" && $patientEmail != "" && $patientAge != "" && $patientpassword != "") {
        
        $result = mysqli_query($db, $sql);
        
        if(!$result) {
            echo mysqli_error($db);
            db_disconnect($db);
        }
        
        echo "<script type=\"text/javascript\">window.alert('Your details were successfully saved');
        window.location.href = './Index.php';</script>";
    }

?>
	<div class="container">
		<h2>Sign Up</h2>
		<div>
			<form action="" method="post">
				<fieldset class="form-group">
    				<div class="form-group row mt-4">
            			<label class="col-form-label col-md-2">Name</label>
            			<div class="col-md-4">
            				<input class="form-control" type="text" name="name" value="<?php echo $patientName;?>"/>
            			</div>
            			<label class="col-form-label col-md-2">Mobile</label>
            			<div class="col-md-4">
            				<input class="form-control" type="text" name="mobile" value="<?php echo $patientMobile;?>"/>
            			</div>
    				</div>
            		<div class="form-group row">
            			<label class="col-form-label col-md-2">Email</label>
            			<div class="col-md-4">
            				<input class="form-control" type="text" name="email" value="<?php echo $patientEmail;?>"/>
            			</div>
            			<label class="col-form-label col-md-2">Age</label>
            			<div class="col-md-4">
            				<input class="form-control" type="text" name="age" value="<?php echo $patientAge;?>"/>
            			</div>
            		</div>
            		<div class="form-group row">
            			<label class="col-form-label col-md-2">Gender</label>
            			<div class="col-md-4">
            				<select name="gender" class="form-control" value="<?php echo $patientGender;?>">
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
            				<input type="hidden" value="true" name="submitted" />
    						<input style="float: right" class="btn btn-primary btn-lg ladda-button" type="submit" name="signUp" value="Create Account" />
    					</div>
    				</div>
    				<a style="float: right" href="index.php" class="font-italic">Already have an account?</a>
    			</fieldset>
			</form>
		</div>		
	</div>
<?php include(SHARED_PATH . '/footer.php'); ?>
