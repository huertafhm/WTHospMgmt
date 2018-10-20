<?php 
    require_once("../private/initialize.php");
    //Handle form values sent by index.php for login
    $username = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
   
        $sql = "SELECT email, password FROM patient WHERE email= '$username' AND password= '$password'";
        $result = mysqli_query($db, $sql);
        
        
        if($result)
        {
            header('location: patientDashboard.php');
        }
        else 
        {
            echo mysqli_errno($db);
        }

?>
