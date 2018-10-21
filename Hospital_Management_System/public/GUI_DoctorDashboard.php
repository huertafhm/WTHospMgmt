<?php require_once('../private/initialize.php'); ?>

<?php ?>

<!doctype html>

<html lang = "en">
	<head>
		<title>Hospital Management</title>
		<meta charset="utf-8">
		<link rel="stylesheet" media="all" href="stylesheets/style.css" />
		<link rel="stylesheet" media="all" href="stylesheets/bootstrap.min.css" />
	</head>
	<body>
		<header>
			<div class="">
				<nav class="navbar navbar-expand-lg navbar-light bg-info">
					<div class="container">
                      <a class="navbar-brand" href="#">Hospital</a>
                      
                      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                          <li class="nav-item active">
                            <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#">History</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#">Appointments</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" style="float:right" href="index.php">Log Out</a>
                          </li>
                        </ul>
                      </div>
                     </div>
                </nav>
			</div>
		</header>
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
    		<div>
    		
    		</div>		
    	</div>
<?php include(SHARED_PATH . '/footer.php'); ?>