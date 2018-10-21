<?php 
    require_once("../private/initialize.php");
    //Handle form values sent by index.php for login
    $username = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    //Check if user is a patient or doctor
    $sqlCheckPatient = "SELECT email, password FROM patient WHERE email = '$username' AND password= MD5('$password')";
    $sqlCheckDoctor = "SELECT email, password FROM doctor WHERE email = '$username' AND password= MD5('$password')";
    $resultPatient = mysqli_query($db, $sqlCheckPatient);
    $resultDoctor = mysqli_query($db, $sqlCheckDoctor);
  
    session_start();
    
    //Depending on the match, the session variable 'userType' is assigned to
    // 1 for patient, 2 for doctor and 0 if login details were invalid
    if ($resultPatient->num_rows > 0){
        $_SESSION['userType'] = 1;
        header('location: GUI_PatientDashboard.php');
    } else if ($resultDoctor->num_rows > 0) {
        $_SESSION['userType'] = 2;
        header('location: GUI_DoctorDashboard.php');
    } else {
        $_SESSION['userType'] = 0;
        header('location: Index.php');
    }
    
    
?>
