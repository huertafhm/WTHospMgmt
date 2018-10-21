<?php 
    session_destroy();
    session_start();
    require_once("../private/initialize.php");
    //Handle form values sent by index.php for login
    $username = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    //Check if user is a patient or doctor
    $sqlCheckPatient = "SELECT patientId, name, email FROM patient WHERE email = '$username' AND password= MD5('$password')";
    $sqlCheckDoctor = "SELECT doctorId, name, email FROM doctor WHERE email = '$username' AND password= MD5('$password')";
    $resultPatient = mysqli_query($db, $sqlCheckPatient);
    $resultDoctor = mysqli_query($db, $sqlCheckDoctor);
      
    //Depending on the match, the session variable 'userType' is assigned to
    // 1 for patient, 2 for doctor and 0 if login details were invalid
    if ($resultPatient->num_rows > 0){
        $_SESSION['userType'] = 2;
        $user = mysqli_fetch_assoc($resultPatient);
        $_SESSION['userId'] = $user['patientId'];
        $_SESSION['userName'] = $user['name'];
        header('location: GUI_PatientDashboard.php');
    } else if ($resultDoctor->num_rows > 0) {
        $_SESSION['userType'] = 1;
        $user = mysqli_fetch_assoc($resultDoctor);
        $_SESSION['userId'] = $user['doctorId'];
        $_SESSION['userName'] = $user['name'];
        header('location: GUI_DoctorDashboard.php');
    } else {
        $_SESSION['userType'] = 0;
        header('location: Index.php');
    }
?>
