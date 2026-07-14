<!DOCTYPE html>
<html>
<head>
  <title>UPHSD Molino HRD Training Monitoring System | Employee Profile </title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #7F1416;
      margin-top: 20px;
      margin-bottom: 20px;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      /*height: 100vh;*/
    }

    .empprof-container {
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      padding: 20px;
      /*width: 75%;*/
    }

    .empprof-container .profcard {
      font-family: sans-serif;
      font-size: 14px;
    }

	.empprof-container .tophead1 {
	  width: 50%;
	  display: inline-block;
	  margin-left: 12.5px;
	  margin-right: 12.5px;
	}

	.empprof-container .tophead2 {
	  width: 40%;
	  display: inline-block;
	  margin-left: 12.5px;
	  margin-right: 12.5px;
	}
	
    .empprof-container h2,
    .empprof-container h3 {
      text-align: center;
      margin-bottom: 20px;
    }
	
	.empprof-container h4{
      text-align: center;
      margin-bottom: 10px;
    }
	
	.empprof-container img {
	  align: center;
      width: 50%; /* Adjust the desired width */
      height: auto; /* Maintain aspect ratio */
    }

    .empprof-container hr {
      border: none;
      height: 1px;
      background-color: #ddd;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .profile-container {
      width: 100%;
    }

    .profile-container table {
      width: 100%;
      border-collapse: collapse;
      /*border: 1px solid #ddd;*/
    }

    .profile-container th,
    .profile-container td {
      padding: 10px;
      text-align: left;
      /*border-bottom: 1px solid #ddd;*/
    }

    .profile-container td:nth-child(odd) {
      width: 120px;
      font-weight: bold;
      background-color: #f7f7f7;
    }

    .empprof-container table {
      width: 100%;
      border-collapse: collapse;
      font-family: sans-serif;
      font-size: 14px;
    }

    .empprof-container th,
    .empprof-container td {
      padding: 10px;
      text-align: left;
      border: 1px solid #ddd;
    }

    .empprof-container th {
      background-color: #7F1416;
      color: #fff;
    }

    .empprof-container tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .empprof-container .profile-container tr:nth-child(even) {
      background-color: #fff;
    }

    .empprof-container tr:hover {
      background-color: #ddd;
    }

    .empprof-container .profile-container tr:hover {
      background-color: #fff;
    }

    .empprof-container .button {
      display: block;
      text-align: center;
      margin-bottom: 10px;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      text-decoration: none;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .empprof-container .button:hover {
      background-color: #45a049;
    }

    .empprof-container .returner {
      background-color: #0074D9; /*#39cccc;*/
    }

    .empprof-container .returner:hover {
      background-color: #005AA6; /*#2d9999;*/
    }
	
	.empprof-container .backtodash {
      background-color: #ff851b;
    }

    .empprof-container .backtodash:hover {
      background-color: #d47716;
    }
	
	.empprof-divider {
	  width: 30%;
	  display: inline-block;
	  margin-left: 12.5px;
	  margin-right: 12.5px;
	  vertical-align: top;
	}

    .pressbtn-container table {
      padding: 10px;
      border: hidden;
      text-align: center;
    }

    .pressbtn-container tr:hover {
      background-color: #fff;
    }

    td.buttons {
      text-align: center;
    }

    td.buttons button {
      padding: 8px 16px;
      margin-right: 8px;
      border: none;
      border-radius: 4px;
      background-color: #4CAF50;
      color: #fff;
      cursor: pointer;
      /*transition: background-color 0.3s ease;*/
    }
    
    td.buttons button.medbtn {
      background-color: #FF4136;
    }

    td.buttons button:hover {
      filter: brightness(80%);
    }
  </style>
</head>

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

// Connect to database
$db = new mysqli('sql101.epizy.com', 'epiz_34177382', 'g8RD7S5lOp', 'epiz_34177382_sad')
;

session_regenerate_id();

$int = (int)$_SESSION['employeeid'];

// Perform search query
$sql = "SELECT ID, fullname, position, department, datehired, empstatus, classify FROM employee where ID = $int";
$result = $db->query($sql);
?>

<body>
  <div class="empprof-container">
    <div class="tophead1">
	<img src="img\perpetual-logo.png" />
	</div>
	<div class="tophead2">
	<h4>Molino HR Department | Web-based Training Monitoring System</h4>
	<h2>Employee Profile</h2>
	</div>
<?php
while ($row = $result->fetch_assoc()): ?>
    <div class="profile-container">
      <table>
      <tr>
        <td>Full Name:</td><td><?php echo $row['fullname']; ?></td><td>Date Hired:</td><td><?php echo $row['datehired']; ?></td>
      </tr><tr>
        <td>Position:</td><td><?php echo $row['position']; ?></td><td>Employment Status:</td><td><?php echo $row['empstatus']; ?>
      </tr><tr>
        <td>Department:</td><td><?php echo $row['department']; ?></td>
      </tr><tr>
        <td>Classification:</td><td><?php echo $row['classify']; ?></td>
      </tr>
      </table>
    </div>
    <div class="pressbtn-container">
      <table>
      <tr>
        <td class="buttons">
          <form action="addemployeelog.php" method="post"> 
          <input hidden type="text" id="employeeid" name="employeeid" value="<?php echo $row['ID']; ?>">
          <button type="submit">Add a Training Log</button>
          </form>
        </td><td class="buttons">
          <form action="editemployee.php" method="post"> 
          <input hidden type="text" id="employeeid" name="employeeid" value="<?php echo $row['ID']; ?>">
          <button type="submit">Edit Employee Details</button>
          </form>
          </td><td class="buttons">
          <form action="editlog.php" method="post"> 
          <input hidden type="text" id="employeeid" name="employeeid" value="<?php echo $row['ID']; ?>">
          <button type="submit">Edit Training log(s)</button>
          </form>
        </td><td class="buttons">
          <form action="removelog.php" method="post"> 
          <input hidden type="text" id="employeeid" name="employeeid" value="<?php echo $row['ID']; ?>">
          <button type="submit" class="medbtn">Remove Training log(s)</button>
          </form>
        </td><td class="buttons">
          <form action="removeemployee.php" method="post" onsubmit="return confirm('You are trying to remove an Employee Record.\nAre you sure you want to proceed?');"> 
          <input hidden type="text" id="employeeid" name="employeeid" value="<?php echo $row['ID']; ?>">
          <button type="submit" class="medbtn">Remove this Employee</button>
          </form>
        </td>
      </tr>      
      </table>
    </div>
  <?php endwhile; 
  ?>
  <br>
<!-- LOGS SECTION naka table na-->
<table class="table">
      <thead>
          <tr class="top-tr">
            <th>Date Filed</th>
            <th>Title</th>
            <th>Date of Seminar</th>
            <th>Venue</th>
            <th>Registration Cost</th>
            <th>Tranportation Cost</th>
            <th>Accomodation Cost</th>
            <th>Total Expense</th>
            <th>Date of Echoing</th>
            <th>Department Head</th>
            <th>HRD</th>
            <th>School Director</th>
            <th>Corporate HR</th>
            <th>Remarks</th>
          </tr>
      </thead>
      <tbody>
      
<?php

$sql2 = "SELECT empid, datefiled, title, dateofseminar, venue, regcost, transcost, accomocost, 
                totalexpense, dateecho, depthead, hrd, schooldirect, corporatehr, remarks from 
                employeelogs where empid = $int ORDER BY dateofseminar DESC";
$result2 = $db->query($sql2);

while ($row2 = $result2->fetch_assoc()):
?>

<tr>
    <td><?php echo $row2['datefiled']?></td>
    <td><?php echo $row2['title']?></td>
    <td><?php echo $row2['dateofseminar']?></td>
    <td><?php echo $row2['venue']?></td>
    <td><?php echo $row2['regcost']?></td>
    <td><?php echo $row2['transcost']?></td>
    <td><?php echo $row2['accomocost']?></td>
    <td><?php echo $row2['totalexpense']?></td>
    <td><?php echo $row2['dateecho']?></td>
    <td><?php echo $row2['depthead']?></td>
    <td><?php echo $row2['hrd']?></td>
    <td><?php echo $row2['schooldirect']?></td>
    <td><?php echo $row2['corporatehr']?></td>
    <td><?php echo $row2['remarks']?></td>
</tr>
<?php 
endwhile;
?>
</tbody>
</table>

    <hr>
	<div style="width:46%; display:inline-block; margin-left: 15px; margin-right: 15px;">
	<a href="searchemployee.php" class="button returner">Return</a>
	</div>
	<div style="width:46%; display:inline-block; margin-left: 15px; margin-right: 15px;">
	<a href="dashboard.php" class="button backtodash">Back to Dashboard</a>
	</div>
  </div>
</body>
</html>


