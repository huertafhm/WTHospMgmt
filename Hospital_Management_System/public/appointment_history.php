<!DOCTYPE html>
<html>
  <head>
    <style>
      body {
      background: #b5d5e8;
           }
      h1 {font-size: 300%}
      form {font-size: 150%}
    </style>
<meta charset="utf-8" />
<title>Appointment History</title>
  </head>
  
<body>
  <h1>Appointment History</h1>

  <div class="header">
    <div class="nav"> 
      <ul>
        <li><a href="doctorDashboard.php">Home Page</a>
        <li><a href="currentappointment.php">Current Appointment</a>
        <li><a href="emergencynotification.php">Emergency Notification</a>
      </ul>
    </div>
  </div>

  Select the Date and Time:<br>
  <input type="date" name="Date and time"><br>
  Patient:<br>
  <input type="text" name="Patient's Name"><br>
  Notes:<br>
  <input type="text" name="Visit Reason"><br>
  <input type="Submit" value="Submit">
  
  <div class="bottom"></div>
  <div class="footer">
     <footer>
   &copy;<?php echo date('Y');?> Hospital
   </footer>
  </div>
</body>
</html>
