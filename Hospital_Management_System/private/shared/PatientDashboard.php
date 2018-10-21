<?php 
require_once('../private/initialize.php'); ?>

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
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    
                      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                          <li class="nav-item active">
                            <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#GUI_VisitHistory.php">Visit History</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#">Make Appointment</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="GUI_CurrentAppointments.php">Current Appointments</a>
                          </li>
                          <li class="nav-item">
                            <a style="float:right" class="nav-link text-white" href="index.php">Log Out</a>
                          </li>
                        </ul>
                        Welcome <?php echo $_SESSION['userName'];?>
                      </div>
                     </div>
                </nav>
			</div>
		</header>
    </body>
</html>