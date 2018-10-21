
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Hospibal appointment</title>
<link rel="stylesheet" href="css/index.css">

</head>
<body>

<div class="header">
<div class="logo">
<img src="image/logogo.jpg" alt="logo">
</div>
<div class="nav"> 
<ul>
<li><a href="patientDashboard.php">Home page</a>
<li><a href="Visit History.php">Visit History</a>
<li><a href="Doctors List.php">Doctors' List</a>
</ul>
</div>
</div>




<div class="main">
<div class="top">
<img src="image/appointments.jpg">
</div>

<div class="topLayer">

</div>
<!-- 最上层的内容 -->
<div class="btn">
<p>Make Your New Appointment</p>
<button>Plan &nbsp;&nbsp;&gt;</button>
</div>

<div class="middle"></div>
 Select the Date and time:<br>
  <input type="date" name="Date and time"><br>
  Patient's Condition:<br>
<select>
  <option value ="Orthopedics">Orthopedics</option>
  <option value ="Internal Medicine">Internal Medicine</option>
  <option value="Pediatrics">Pediatrics</option>
  <option value="Ophthalmology">Ophthalmology</option>
  <option value="Dentistry">Dentistry</option>
  <option value="Others">Others</option>
</select>
</div>
 


</body>




<div class="bottom"></div>


<div class="footer">
     <footer>
   &copy;<?php echo date('Y');?> Hospital
   </footer>
</div>
</body>
</html>
