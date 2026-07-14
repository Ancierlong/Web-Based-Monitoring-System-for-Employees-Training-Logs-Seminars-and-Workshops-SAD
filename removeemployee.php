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

// Perform search query
$sql = "DELETE FROM employee WHERE ID = $int";
$result = $conn->query($sql);

$sql2 = "DELETE FROM employeelogs WHERE empid = $int";
$result2 = $conn->query($sql2);

header('Location: searchemployee.php');
?>