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
    $sqlPatientExists = "SELECT*FROM patient where email = '$patientEmail'";
    $sqlDoctorExists = "SELECT*FROM doctor where email = '$patientEmail'";
    
    //Retrieve results if email is already registered in any of the tables
    $error = mysqli_query($db, $sqlPatientExists);
    $error2 = mysqli_query($db, $sqlDoctorExists);
    
    //If there were records, display an alert message
    if ($error || $error2){
        echo "<script type=\"text/javascript\">window.alert('That email is already registered!');
        window.location.href = './signup.php';</script>"; 
    } else {
    
        $result = mysqli_query($db, $sql);
        
        if($result)
        {
            echo "Your details have been saved, ".$patientName.".";
        }
        else 
        {
            echo mysqli_error($db);
            db_disconnect($db);
            exit;
        }
    }
    
?>