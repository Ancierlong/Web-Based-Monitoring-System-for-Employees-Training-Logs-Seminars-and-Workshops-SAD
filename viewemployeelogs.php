<!DOCTYPE html>
<html>
<head>
  <title>UPHSD Molino HRD Training Monitoring System | Viewing Employee Logs</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #7F1416;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .viewemplog-container {
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      padding: 25px;
      width: 300px;
    }

    .viewemplog-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
	
	.viewemplog-container h3 {
      text-align: center;
      margin-bottom: 20px;
    }
	
	.viewemplog-container h4 {
      text-align: center;
      margin-bottom: 20px;
    }
	
	.viewemplog-container hr {
      border: none;
      height: 1px;
      background-color: #ddd;
      margin-top: 20px;
      margin-bottom: 20px;
    }
	
	.viewemplog-container img {
	  align: center;
      width: 100%; /* Adjust the desired width */
      height: auto; /* Maintain aspect ratio */
    }
	
	.viewemplog-container select {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .viewemplog-container .button {
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
      transition: background-color 0.3s ease;
    }

    .viewemplog-container .button:hover {
      background-color: #3d8b40;
    }
	
	.viewemplog-container input[type="submit"] {
      background-color: #4CAF50;
	  font-size: 16px;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s ease;
    }

    .viewemplog-container input[type="submit"]:hover {
      background-color: #3d8b40;
    }

    .viewemplog-container .sendemails {
      background-color: #0074D9;
    }

    .viewemplog-container .sendemails:hover {
      background-color: #004E8C;
    }

    .viewemplog-container .sendallemails {
      background-color: #0098d9;
    }

    .viewemplog-container .sendallemails:hover {
      background-color: #004E8C;
    }

    .viewemplog-container .backtodash {
      background-color: #ff851b;
    }

    .viewemplog-container .backtodash:hover {
      background-color: #d47716;
    }
  </style>
  <script>
    function showConfirmTeach() {
      var confirmation = confirm("Are you sure you want send Training Logs from the Employees\nin Teaching class as an E-mail to the HRD?");
      if (confirmation) {
        window.location.href = "sendemailTeaching.php";
      }
    }
    function showConfirmNonTeach() {
      var confirmation = confirm("Are you sure you want send Training Logs from the Employees\nin Non-Teaching class as an E-mail to the HRD?");
      if (confirmation) {
        window.location.href = "sendemailNon-Teach.php";
      }
    }
    function showConfirmAdmin() {
      var confirmation = confirm("Are you sure you want send Training Logs from the Employees\nin Administration class as an E-mail to the HRD?");
      if (confirmation) {
        window.location.href = "sendemailAdministration.php";
      }
    }
    function showConfirmSendAll() {
      var confirmation = confirm("Are you sure you want send all Training Logs from the Employees as an E-mail to the HRD?");
      if (confirmation) {
        window.location.href = "sendemailall.php";
      }
    }
  </script>
</head>

<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['username'])) {
	header('Location: index.php');
	exit;
}

// Connect to the database
$conn = mysqli_connect("sql101.epizy.com", "epiz_34177382", "g8RD7S5lOp", "epiz_34177382_sad");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<body>
  <div class="viewemplog-container">
    <img src="img\perpetual-logo.png">
	<h4>Molino HRD Training Monitoring Sys</h4>
	<h2>View Employee Logs</h2>
    <form action="viewingemployeelogs.php" method="POST">
	<h5>Search by classification:</h5>
	<select class="viewemplog-container" type="text" id="classify" name="classify" style="" required>
        <option value="Teaching">Teaching</option>
        <option value="Non-Teaching">Non-Teaching</option>
        <option value="Administration">Administration</option>
		<option value='%%'>All</option>
    </select>
	<input class="viewemplog-container" type="submit" value="Submit">
	</form>
    <hr>
    <h4>Send Training Logs to E-mail:</h4>
    <div style="width:45%; display:inline-block; margin-left: 5px; margin-right: 5px;">
    <a href="#" onclick="showConfirmTeach()" class="button sendemails" >Teaching</a>
    <a href="#" onclick="showConfirmNonTeach()" class="button sendemails" >Non-Teaching</a>
    </div>
    <div style="width:45%; display:inline-block; margin-left: 5px; margin-right: 5px;">
    <a href="#" onclick="showConfirmAdmin()" class="button sendemails" >Administration</a>
    <a href="#" onclick="showConfirmSendAll()" class="button sendallemails" >Send All</a>
    </div>
    <hr>
    <a href="dashboard.php" class="button backtodash">Back to Dashboard</a>
  </div>
</body>
</html>