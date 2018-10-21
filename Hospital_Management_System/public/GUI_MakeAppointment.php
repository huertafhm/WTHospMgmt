<?php

session_start();
date_default_timezone_set('Australia/Sydney');
require_once('../private/initialize.php');
include(SHARED_PATH . '/PatientDashboard.php');

?>

<?php 
   
    $currentDate = date("Y-m-d G:i");
    $patientId = $_SESSION['userId'];
    $selectedDoctor = isset($_POST['doctorId']) ? $_POST['doctorId'] : " ";
    
    if (isset($_POST['lookUpDate'])) {
        $lookUpDate = $_POST['lookUpDate'];
    } else {
        $lookUpDate = date("Y-m-d");
    }
    //$lookUpDate = isset($_POST['lookUpDate']) ? $_POST['lookUpDate'] : " ";
    
    
    //SQL command to retrieve doctors list
    $sql = "SELECT doctorId, name, specialty FROM doctor ORDER BY specialty";
    $resultDoctors = mysqli_query($db, $sql);
    
    //If there is a doctor selected, retrieve his name and used slots
    if (isset($_POST['doctorId'])) {
        $sql = "SELECT name FROM doctor WHERE doctorId='".$selectedDoctor."'";
        $resultDoctor = mysqli_query($db, $sql);
        $doctor = mysqli_fetch_assoc($resultDoctor);
        $doctorName = $doctor['name'];
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
	
	<table width="100%">
		<td width="10%"></td>
		<td>
		<h2 style="margin-top: 30px">Create new appointment:</h2>
    		<form action="" method="post">
            	<fieldset>
            		<div class="form-group row mt-4">
            			<label class="col-form-label col-md-2">Specialty / Doctor:</label>
            			<div class="col-md-2">
            				<select name="doctorId" value="1008">
                        			<?php 
                            		while ($doctor = mysqli_fetch_assoc($resultDoctors)) {
                            		  $doctorId = $doctor['doctorId'];
                            		  echo "<option value=\"$doctorId\" ";
                            		  if($selectedDoctor==$doctorId){
                            		      echo "selected";
                            		  }
                            		  echo ">";
                            		  echo $doctor['specialty']." - ".$doctor['name'];
                            		  echo "</option>\n";
                            		}
                            		?>
                       		</select>
                       	</div>  
                    </div>
                    <div class="form-group row mt-4">
                       	<label class="col-form-label col-md-2">Day:</label>
            			<div class="col-md-2">
            				<input type="date" name="lookUpDate" id="dateinput" value="<?php echo $lookUpDate;?>">
                       	</div>                       	
            		</div>
            		<input type="submit" name="lookUpAvailability" value="Search Availability" />   
            	</fieldset>
            </form>
            <?php 
            if (isset($_POST['doctorId'])) {
                echo $doctorName."'s available slots on ".$lookUpDate." are:";
            }
            ?>
        </td>        
    	<td width="10%"></td>
	</table>
	
	
	
	</body>
</html>
	
	
<?php include(SHARED_PATH . '/footer.php'); ?>
