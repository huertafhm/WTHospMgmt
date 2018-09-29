<?php 
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "HospMgmt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

function getDoctorById($id){
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "HospMgmt";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT*FROM doctor WHERE doctorId="+$id+";";
    $result = $conn->query($sql);
    
        $row = $result->fetch_assoc();
        return $row["name"];
    
}

?>

