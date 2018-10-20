<?php
//Handle form values sent by signup.php for for signing up

$firstName = isset($_POST['fName']) ? $_POST['fName'] : '';
$lastName = isset($_POST['lName']) ? $_POST['lName'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$dateOfBirth = isset($_POST['dob']) ? $_POST['dob'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

echo "Form parameters<br>";
echo "First Name: " . $firstName . "<br>";
echo "Last Name: " . $lastName . "<br>";
echo "Email: " . $email . "<br>";
echo "Date of Birth: " . $dateOfBirth . "<br>";
echo "password: " . $password . "<br>";
?>