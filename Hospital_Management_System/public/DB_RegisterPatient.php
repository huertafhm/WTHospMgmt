<?php
    require_once("../private/initialize.php");

    //Handle form values sent by signup.php for for signing up
    $patientName = isset($_POST['name']) ? $_POST['name'] : "";
    $patientMobile = isset($_POST['mobile']) ? $_POST['mobile'] : "";;
    $patientEmail = isset($_POST['email']) ? $_POST['email'] : "";;
    $patientAge = isset($_POST['age']) ? $_POST['age'] : "";;
    $patientGender = isset($_POST['gender']) ? $_POST['gender'] : "";;
    $patientpassword = isset($_POST['password']) ? $_POST['password'] : "";;
    $errorData = false;
    
    $regexpName = "/^[A-Za-z]{2,} [A-Za-z]{2,}/";
    echo $patientName;
    if (!preg_match($regexpName,$patientName)) {
        $errorData = true;
        echo "<script type=\"text/javascript\">window.alert('Insert your full name');
        window.history.go(-1);</script>";
    }
    
    $regexpMobile = "/\+?[0-9]{10,13}$/";
    if (!preg_match($regexpMobile,$patientMobile)) {
        $errorData = true;
        echo "<script type=\"text/javascript\">window.alert('Insert your 10-digit phone');
        window.history.go(-1);</script>";
    }
    
    $regexpEmail = "/^(([^<>()\[\]\\.,;:\s@\"]+(\.[^<>()\[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
    if (!preg_match($regexpEmail,$patientEmail)) {
        $errorData = true;
        echo "<script type=\"text/javascript\">window.alert('Insert a valid e-mail');
        window.history.go(-1);</script>";
    }
    
    $regexpAge = "/^(0?[1-9]|[1-9][0-9]|[1][0-2][0-9]|130)$/";
    if (!preg_match($regexpAge,$patientAge)) {
        $errorData = true;
        echo "<script type=\"text/javascript\">window.alert('Insert your age');
        window.history.go(-1);</script>";
    }
    
    $regexpPassword = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";
    if (!preg_match($regexpPassword,$patientpassword)) {
        $errorData = true;
        echo "<script type=\"text/javascript\">window.alert('Password must contain a minimum of 8 characters, a letter and a number');
        window.history.go(-1);</script>";
    }
       

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
    } else if (!$errorData) {
    
        $result = mysqli_query($db, $sql);
        
        if(!$result) {
            echo mysqli_error($db);
            db_disconnect($db);
        }
        
        echo "<script type=\"text/javascript\">window.alert('Your details were successfully saved');
        window.location.href = './Index.php';</script>"; 
    }
    
?>