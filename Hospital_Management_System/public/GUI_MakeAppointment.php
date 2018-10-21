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
    $timeSlots = array("09:00:00", "09:30:00", "10:00:00", "10:30:00", "11:00:00", 
        "11:30:00", "12:00:00", "12:30:00", "13:00:00", "13:30:00");
    
    if (isset($_POST['lookUpDate'])) {
        $lookUpDate = $_POST['lookUpDate'];
    } else {
        $lookUpDate = date("Y-m-d");
    }
    $lookUpDatePlus = date("Y-m-d", strtotime($lookUpDate . ' +1 day'));    
    
    //SQL command to retrieve doctors list
    $sql = "SELECT doctorId, name, specialty FROM doctor ORDER BY specialty";
    $resultDoctors = mysqli_query($db, $sql);
    
    //If there is a doctor selected, retrieve his name and used slots
    if (isset($_POST['doctorId'])) {
        $sql1 = "SELECT name FROM doctor WHERE doctorId='".$selectedDoctor."'";
        $resultDoctor = mysqli_query($db, $sql1);
        $doctor = mysqli_fetch_assoc($resultDoctor);
        $doctorName = $doctor['name'];
        
        $sql2 = "SELECT CAST(appointmentDate as time) as time ";
        $sql2 .= "FROM appointment WHERE doctorId = '".$selectedDoctor."' ";
        $sql2 .= "AND appointmentDate > '".$lookUpDate."' AND appointmentDate < '".$lookUpDatePlus."'";
        $resultTimes = mysqli_query($db, $sql2);
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
            
            <form action="DB_RegisterAppointment" method="post">
            <?php 
            if (isset($_POST['doctorId'])) {
                
                echo "<div style=\"margin-top: 30px; margin-bottom: 30px\">Select an available time:</div>";
                
                $usedSlots = array();
                
                while ($usedSlot = mysqli_fetch_assoc($resultTimes)) {
                    array_push($usedSlots, $usedSlot['time']);
                }
                
                foreach ($timeSlots as &$slot) {
                    
                    if (in_array($slot, $usedSlots)) {} else {
                    echo "<div><input type=\"radio\" id=\"$slot\"
                            name=\"selectedTime\" value=\"$slot\"/>
                          <label for=\"$slot\">$slot</label></div>";}
                    
                }
            }
            ?>
        </td>        
    	<td width="10%"></td>
	</table>
	
	
	
	</body>
</html>
	
<h1 style="margin-top: 30px"></h1>
<?php include(SHARED_PATH . '/footer.php'); ?>
