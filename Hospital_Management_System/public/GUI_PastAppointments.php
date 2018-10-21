<?php
session_start();
require_once('../private/initialize.php');

if ($_SESSION['userType']==1) {
    include(SHARED_PATH . '/DoctorDashboard.php');
} else if ($_SESSION['userType']==2) {
    include(SHARED_PATH . '/PatientDashboard.php');
}
?>

<?php 
   
    $userType = $_SESSION['userType'];
    $currentDate = date("Y-m-d G:i");
    $tableUser = '';
    
    if ($userType === 1) {
        
        $doctorId = $_SESSION['userId'];
        $sql = "SELECT A.appointmentId, P.name, ";
        $sql .= "A.appointmentDate, A.room FROM appointment A JOIN patient P ON A.patientId = P.patientId ";
        $sql .= "WHERE A.doctorId = '$doctorId' AND A.appointmentDate < '$currentDate' ORDER BY A.appointmentDate DESC";
        $result = mysqli_query($db, $sql); 
        $tableUser = "Patient";
  
    } else if ($userType === 2) {
        
        $patientId = $_SESSION['userId'];
        $sql = "SELECT A.appointmentId, D.name, ";
        $sql .= "A.appointmentDate, A.room FROM appointment A JOIN doctor D ON A.doctorId = D.doctorId ";
        $sql .= "WHERE A.patientId = '$patientId' AND A.appointmentDate < '$currentDate' ORDER BY A.appointmentDate DESC";
        $result = mysqli_query($db, $sql);
        $tableUser = "Doctor";
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
		<h2 style="margin-top: 30px">Your previous appointments:</h2>
        	<table style="margin-top: 30px" width="100%">
        		<tr>
        			<th width="20%"><?php echo $tableUser;?></th>
        			<th width="20%">Room</th>
        			<th>Date and time</th>
        		</tr>
        		<?php 
        		while ($row = mysqli_fetch_assoc($result)) {
        		  echo "<tr>\n";
        		  echo "<td>".$row['name']."</td>\n";
        		  echo "<td>".$row['room']."</td>\n";
        		  echo "<td>".$row['appointmentDate']."</td>\n";
        		  echo "</tr>\n";
        		}
        		?>
        	</table>
        </td>
    	<td width="10%"></td>
	</table>
	
	</body>
</html>
	
	
<?php include(SHARED_PATH . '/footer.php'); ?>
