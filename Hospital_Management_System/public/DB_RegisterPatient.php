<?php
    require_once("../private/initialize.php");

    //Handle form values sent by signup.php for for signing up
    $patientName = isset($_POST['name']) ? $_POST['name'] : " ";
    $patientMobile = isset($_POST['mobile']) ? $_POST['mobile'] : " ";;
    $patientEmail = isset($_POST['email']) ? $_POST['email'] : " ";;
    $patientAge = isset($_POST['age']) ? $_POST['age'] : " ";;
    $patientGender = isset($_POST['gender']) ? $_POST['gender'] : " ";;
    $patientpassword = isset($_POST['password']) ? $_POST['password'] : " ";;

    //SQL command to insert values
    $sql = "INSERT INTO patient ";
    $sql .= "(name, phone, email, age, gender, password) ";
    $sql .= "VALUES (";
    $sql .= "'" . $patientName . "',";
    $sql .= "'" . $patientMobile . "',";
    $sql .= "'" . $patientEmail . "',";
    $sql .= "'" . $patientAge . "',";
    $sql .= "'" . $patientGender . "',";
    $sql .= "MD5('" . $patientpassword . "')";
    $sql .= ")";
    
    //SQL command to check existing mail
    $sqlPatientExists = "SELECT count(patientId) as result FROM patient where email = '$patientEmail'";
    $sqlDoctorExists = "SELECT count(doctorId) as result FROM doctor where email = '$patientEmail'";
    
    //Retrieve results if email is already registered in any of the tables
    $error = mysqli_query($db, $sqlPatientExists);
    $error = mysqli_fetch_assoc($error);
    $error = $error['result'];
    $error2 = mysqli_query($db, $sqlDoctorExists);
    $error2 = mysqli_fetch_assoc($error2);
    $error2 = $error2['result'];
    
    //If there were records, display an alert message
    if ($error || $error2){
        echo "<script type=\"text/javascript\">window.alert('That email is already registered!');
        window.location.href = './GUI_SignUp.php';</script>"; 
    } else {
    
        $result = mysqli_query($db, $sql);
        
        if(!$result) {
            echo mysqli_error($db);
            db_disconnect($db);
        }
        
        echo "<script type=\"text/javascript\">window.alert('Your details were successfully saved');
        window.location.href = './Index.php';</script>"; 
    }
    
?>