<!DOCTYPE html>
<html>
<head>
  <title>UPHSD Molino HRD Training Monitoring System | Add Employee</title>
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

    .addemp-container {
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      padding: 25px;
      width: 600px;
    }

    .addemp-container h2{
      text-align: center;
      margin-bottom: 20px;
    }
	
	.addemp-container h3{
      text-align: center;
      margin-bottom: 20px;
    }
	
	.addemp-container h4{
      text-align: center;
      margin-bottom: 20px;
    }
	
	.addemp-container img {
	  align: center;
      width: 50%; /* Adjust the desired width */
      height: auto; /* Maintain aspect ratio */
    }
	
	.addemp-container select {
      width: 100%;
      padding: 7.5px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
	
	.addemp-container hr {
      border: none;
      height: 1px;
      background-color: #ddd;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .addemp-container input[type="text"],
    .addemp-container input[type="date"] {
      width: 100%;
      padding: 7.5px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
	
	.addemp-container label {
	  font-size: 13px;
	  font-weight: bold;
	}
	
	.addemp-container .button {
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

    .addemp-container .button:hover {
      background-color: #3d8b40;
    }

    .addemp-container input[type="submit"] {
      background-color: #4CAF50;
	  font-size: 16px;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
	  margin-top: 5px;
      width: 50%;
	  transform: translateX(+50%);
      transition: background-color 0.3s ease;
    }

    .addemp-container input[type="submit"]:hover {
      background-color: #3d8b40;
    }
	
	.addemp-container .backtodash {
      background-color: #ff851b;
    }

    .addemp-container .backtodash:hover {
      background-color: #d47716;
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

// Connect to the database
$conn = mysqli_connect("sql101.epizy.com", "epiz_34177382", "g8RD7S5lOp", "epiz_34177382_sad");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$display ="";

// Check if the user has submitted the form
if (isset($_POST['submit'])) {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $datehired = mysqli_real_escape_string($conn, $_POST['datehired']);
    $empstatus = mysqli_real_escape_string($conn, $_POST['empstatus']);
    $classify = mysqli_real_escape_string($conn, $_POST['classify']);

    // Insert the values into the database
    $sql = "INSERT INTO employee (fullname, position, department, datehired, empstatus, classify) VALUES ('$fullname', '$position', '$department', '$datehired', '$empstatus', '$classify')";

    if (mysqli_query($conn, $sql)) {
        $display = "<h2 style='color:red;'>Employee Added!</h2>";
    } else {
        echo "Error: " . mysqli_error($conn);
    } 
}

// Close the database connection
mysqli_close($conn);
?>


<body>
  <div class="addemp-container">
	<img src="img\perpetual-logo.png">
	<h4>Molino HR Department | Web-based Training Monitoring System</h4>
	<h2>Add Employee</h2>
    <?php
    echo $display;
    ?>
	<hr>
    <form method="post" action="addemployee.php">
        <div style="width:45%; display:inline-block; margin-left: 12.5px; margin-right: 12.5px;">
		<label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>
        <br>
        <label for="position">Position:</label>
        <input type="text" id="position" name="position" required>
        <br>
        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required>
        <br>
		</div>
		<div style="width:45%; display:inline-block; margin-left:12.5px; margin-right: 12.5px;">
        <label for="datehired">Date Hired:</label>
        <input type="date" id="datehired" name="datehired" required>
        <br>
        <label for="empstatus">Employment Status:</label>
        <input type="text" id="empstatus" name="empstatus" required>
        <br>

        <label for="classify">Classification:</label>
        <select type="text" id="classify" name="classify" style="" required>
                <option value="Teaching">Teaching</option>
                <option value="Non-Teaching">Non-Teaching</option>
                <option value="Administration">Administration</option>
        </select>
		</div>
		<div style="">
        <input type="submit" name="submit" value="Submit New Record">
		</div>
    </form>
	<hr>
	<a href="dashboard.php" class="button backtodash">Back to Dashboard</a>
  </div>
</body>
</html>