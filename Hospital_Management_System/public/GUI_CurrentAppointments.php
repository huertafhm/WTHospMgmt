<?php 
    session_start();
    require_once("../private/initialize.php");
    
    $userType = $_SESSION['userType'];
    $currentDate = date("Y-m-d G:i");
    
    if ($userType === 1) {
        
        $doctorId = $_SESSION['userId'];
        $sql = "SELECT appointmentId, patientId, appointmentDate, room FROM appointment WHERE doctorId = '$doctorId' AND appointmentDate > '$currentDate'";
        $result = mysqli_query($db, $sql); 
        
        echo "<ul>\n";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>\n";
            echo $row['patientId']." ".$row['room']." ".$row['appointmentDate'];
            echo "</li>\n";
        }
  
    } else if ($userType === 2) {
        
        $patientId = $_SESSION['userId'];
        $sql = "SELECT appointmentId, doctorId, appointmentDate, room FROM appointment WHERE patientId = '$patientId' AND appointmentDate > '$currentDate'";
        $result = mysqli_query($db, $sql);
        
        echo "<ul>\n";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>\n";
            echo $row['doctorId']." ".$row['room']." ".$row['appointmentDate'];
            echo "</li>\n";
        }
    }
    
    
    
?>
