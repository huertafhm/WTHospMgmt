<?php
    require_once("../private/initialize.php");

    //Handle form values sent by signup.php for for signing up
    $patientName = isset($_POST['name']) ? $_POST['name'] : " ";
    $patientMobile = isset($_POST['mobile']) ? $_POST['mobile'] : " ";;
    $patientEmail = isset($_POST['email']) ? $_POST['email'] : " ";;
    $patientAge = isset($_POST['age']) ? $_POST['age'] : " ";;
    $patientGender = isset($_POST['gender']) ? $_POST['gender'] : " ";;
    $patientpassword = isset($_POST['password']) ? $_POST['password'] : " ";;

    $sql = "INSERT INTO patient ";
    $sql .= "(name, phone, email, age, gender, password) ";
    $sql .= "VALUES (";
    $sql .= "'" . $patientName . "',";
    $sql .= "'" . $patientMobile . "',";
    $sql .= "'" . $patientEmail . "',";
    $sql .= "'" . $patientAge . "',";
    $sql .= "'" . $patientGender . "',";
    $sql .= "'" . $patientpassword . "'";
    $sql .= ")";
    
    $result = mysqli_query($db, $sql);
    
    if($result)
    {
        echo "<h1>Congratulation! You successfully signed up</h1>";
    }
    else 
    {
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
    
?>