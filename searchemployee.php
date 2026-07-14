<!DOCTYPE html>
<html>
<head>
  <title>UPHSD Molino HRD Training Monitoring System | Employee Search</title>
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

    .searchemp-container {
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      padding: 25px;
      width: 300px;
    }

    .searchemp-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
	
	.searchemp-container h3 {
      text-align: center;
      margin-bottom: 20px;
    }
	
	.searchemp-container h4 {
      text-align: center;
      margin-bottom: 20px;
    }

    .searchemp-container h5 {
      text-align: justify;
      font-style: italic;
    }
	
	.searchemp-container hr {
      border: none;
      height: 1px;
      background-color: #ddd;
      margin-top: 20px;
      margin-bottom: 20px;
    }
	
	.searchemp-container img {
	  align: center;
      width: 100%; /* Adjust the desired width */
      height: auto; /* Maintain aspect ratio */
    }
	
	.searchemp-container input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
	
	.searchemp-container select {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .searchemp-container .button {
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

    .searchemp-container .button:hover {
      background-color: #3d8b40;
    }

    .searchemp-container .backtodash {
      background-color: #ff851b;
    }

    .searchemp-container .backtodash:hover {
      background-color: #D47716;
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
?>
<body>
  <div class="searchemp-container">
    <img src="img\perpetual-logo.png">
	<h4>Molino HRD Training Monitoring Sys</h4>
	<h2>Search for Employee</h2>
	<hr>
    <form method="GET" action="search.php">
	<input type="text" name="query" placeholder="Enter employee name to search:">
	<input class="searchemp-container button" type="submit" value="Search">
    <h5>(You may leave the searchbox blank then click 'Search' to view all employees.)</h5>
	</form>
    <hr>
    <a href="dashboard.php" class="button backtodash">Back to Dashboard</a>
  </div>
</body>
</html>