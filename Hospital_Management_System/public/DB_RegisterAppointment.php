<?php
    require_once("../private/initialize.php");

    //Handle form values sent by signup.php for for signing up
    $doctorId = isset($_POST['doctorId']) ? $_POST['doctorId'] : " ";
    $patientId = isset($_POST['patientId']) ? $_POST['patientId'] : " ";;
    $selectedDate = isset($_POST['selectedDate']) ? $_POST['selectedDate'] : " ";;
    
    echo $doctorId;
    echo $patientId;
    echo $selectedDate;
    
    //SQL command to insert values
    $sql = "INSERT INTO appointment ";
    $sql .= "(doctorId, patientId, appointmentDate, room) ";    
    $sql .= "VALUES (";
    $sql .= "'" . $doctorId . "',";
    $sql .= "'" . $patientId . "',";
    $sql .= "'" . $selectedDate . "',";
    $sql .= "'B50'";
    $sql .= ")";
    
    $result = mysqli_query($db, $sql);
        
    if($result)
    {
        echo "Your appointment was saved, ".$patientId.".";
    }
    else 
    {
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
    
    header('location: GUI_CurrentAppointments.php');
        
    
    
?>