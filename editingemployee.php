<?php

session_start();
$servername = "sql101.epizy.com";
$username = "epiz_34177382";
$password = "g8RD7S5lOp";
$dbname = "epiz_34177382_sad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_regenerate_id();

$_SESSION['employeeid'] = $_POST['employeeid'];
$int = $_SESSION['employeeid'];

$_SESSION['fullname'] = $_POST['fullname'];
$fullname = $_SESSION['fullname'];

$_SESSION['position'] = $_POST['position'];
$position = $_SESSION['position'];

$_SESSION['department'] = $_POST['department'];
$department = $_SESSION['department'];

$_SESSION['empstatus'] = $_POST['empstatus'];
$empstatus = $_SESSION['empstatus'];

$_SESSION['classify'] = $_POST['classify'];
$classify = $_SESSION['classify'];

// Perform search query
$sql = "UPDATE employee SET fullname = '$fullname', position = '$position', department = '$department', 
                empstatus = '$empstatus', classify = '$classify' WHERE ID = $int";
$result = $conn->query($sql);

$sql2 = "UPDATE employeelogs SET classify = '$classify' WHERE empid = $int";
$result2 = $conn->query($sql2);



header('Location: employeeprofile.php?msg');

?>