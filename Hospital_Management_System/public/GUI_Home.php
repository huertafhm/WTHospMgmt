<?php 
session_start();
require_once('../private/initialize.php'); ?>

<?php 
if ($_SESSION['userType']==1) {
    include(SHARED_PATH . '/DoctorDashboard.php');
} else if ($_SESSION['userType']==2) {
    include(SHARED_PATH . '/PatientDashboard.php');
}
?>

<!doctype html>

<html lang = "en">
	<head>
		<title>Hospital Management</title>
		<meta charset="utf-8">
		<link rel="stylesheet" media="all" href="stylesheets/style.css" />
		<link rel="stylesheet" media="all" href="stylesheets/bootstrap.min.css" />
	</head>
	<body>
    	<div>
    		<div>    			
    		</div>
    		<div class="container">
    			<div class="row">
    				<div class="col-md-2"></div>
    				<div class="card mb-4 col-md-4 mr-4 mt-4" style="width: 18rem;">
                  		<img class="card-img-top" src="images/Card1.jpg" alt="Card image cap">
                  		<div class="card-body">
                    		<h5 class="card-title">Health News</h5>
                    		<p class="card-text">A discovery about a function in the liver could lead to a new way to control blood pressure ...</p>
                    		<a href="#" class="btn btn-primary">Learn More</a>
                  		</div>
                	</div>
                	<div class="card mb-4 col-md-4 ml-4 mt-4" style="width: 18rem;">
                  		<img class="card-img-top" src="images/Card2.jpg" alt="Card image cap">
                  		<div class="card-body">
                    		<h5 class="card-title">Fitness Blog</h5>
                    		<p class="card-text">Looking to reach your fitness goals? These blogs have got you covered. From bodybuilding to yoga ...</p>
                    		<a href="#" class="btn btn-primary">Learn More</a>
                  		</div>
                	</div>
                	<div class="col-md-2"></div>
    			</div>
    		</div>	
    	</div>
<?php include(SHARED_PATH . '/footer.php'); ?>