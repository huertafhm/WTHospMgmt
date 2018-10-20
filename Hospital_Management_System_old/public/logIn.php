<?php 
    //Handle form values sent by index.php for login
    $username = isset($_POST['userName']) ? $_POST['userName'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    echo "Form parameters<br>";
    echo "Username: " . $username . "<br>";
    echo "password: " . $password . "<br>";
?>
