<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['username'])) {
	header('Location: index.php');

	if (!isset($_SESSION['employeeid'])) {
    header('Location: dashboard.php');
  }
  exit;
}
?>

<a href="dashboard.php">Dashboard</a>
<br>
<br>

<form class="contact-form mb-10" action="addinglog.php" method="POST">
Log name: <input type="text" name="logname">
<br>
<br>

Log type: 
<select type="text" name="logtype" required>
<option value="Training">Training</option>
<option value="Seminar">Seminar</option>
<option value="Workshop">Workshop</option>
</select>
<br>
<br>

Premises: 
<select type="text" name="logprem" required>
<option value="None">None</option>
<option value="Inside">Inside</option>
<option value="Outside">Outside</option>
</select>
<br>
<br>

Department: 
<select type="text" name="logdept" required>
<option value="None">None</option>    
<option value="CCS">CCS</option>
<option value="Tour">Tour</option>
<option value="Eng">Eng</option>
</select>
<br>
<br>

Field: 
<select type="text" name="logfield" required>
<option value="None">None</option>  
<option value="Academic">Academic</option>
<option value="Administrative">Administrative</option>
<option value="Support">Support</option>
</select>
<br>
<br>

Year: <input type="text" name="logyear">
<br>
<br>

<input type="submit" value="Submit">
</form>