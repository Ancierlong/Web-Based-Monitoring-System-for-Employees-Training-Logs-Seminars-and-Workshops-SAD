<!DOCTYPE html>
<html>
<head>
  <title>UPHSD Molino HRD Training Monitoring System | Dashboard</title>
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

    .dashboard-container {
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      padding: 25px;
      width: 300px;
    }

    .dashboard-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
	
	.dashboard-container h3 {
      text-align: center;
      margin-bottom: 20px;
    }
	
	.dashboard-container h4 {
      text-align: center;
      margin-bottom: 20px;
    }
	
	.dashboard-container hr {
      border: none;
      height: 1px;
      background-color: #ddd;
      margin-top: 20px;
      margin-bottom: 20px;
    }
	
	.dashboard-container img {
	  align: center;
      width: 100%; /* Adjust the desired width */
      height: auto; /* Maintain aspect ratio */
    }

    .dashboard-container .button {
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

    .dashboard-container .button:hover {
      background-color: #3d8b40;
    }

    .dashboard-container .logout {
      background-color: #FF4136;
    }

    .dashboard-container .logout:hover {
      background-color: #C12C24;
    }

    .dashboard-container .login-button {
      width: 100%;
      font-size: 17px;
      padding: 10px;
      background-color: #FF4136;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .dashboard-container .login-button:hover {
      background-color: #DB362D;
    }
  </style>
  <script>
    function confirmLogout() {
      var confirmation = confirm("Are you sure you want to logout?");
      if (confirmation) {
        window.location.href = "logout.php";
      }
    }
  </script>
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
?>
<body>
  <div class="dashboard-container">
    <img src="img\perpetual-logo.png">
	<h4>Molino HRD | Web-based Training Monitoring System</h4>
    <h2>Dashboard</h2>
	<hr>
    <a href="searchemployee.php" class="button" >Search Employee</a>
    <a href="viewemployeelogs.php" class="button" >View Employee Training Logs</a>
	<hr>
    <a href="addemployee.php" class="button" >Add Employee</a>
    <hr>
    <input class="login-button" type="button" value="Logout" onclick="confirmLogout()">
    <!--a href="logout.php" class="button logout">Logout</a-->
  </div>
</body>
</html>
