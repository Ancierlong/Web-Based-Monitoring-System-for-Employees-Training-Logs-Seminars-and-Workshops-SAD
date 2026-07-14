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
$employeeid = $_SESSION['employeeid'];

$_SESSION['classify'] = $_POST['classify'];
$classify = $_SESSION['classify'];

$_SESSION['datefiled'] = $_POST['datefiled'];
$datefiled = $_SESSION['datefiled'];

$_SESSION['title'] = $_POST['title'];
$title = $_SESSION['title'];

$_SESSION['dateofseminar'] = $_POST['dateofseminar'];
$dateofseminar = $_SESSION['dateofseminar'];

$_SESSION['venue'] = $_POST['venue'];
$venue = $_SESSION['venue'];

$_SESSION['regcost'] = $_POST['regcost'];
$regcost = $_SESSION['regcost'];

$_SESSION['transcost'] = $_POST['transcost'];
$transcost = $_SESSION['transcost'];

$_SESSION['accomocost'] = $_POST['accomocost'];
$accomocost = $_SESSION['accomocost'];

$_SESSION['totalexpense'] = $_POST['totalexpense'];
$totalexpense = $_SESSION['totalexpense'];

$_SESSION['dateecho'] = $_POST['dateecho'];
$dateecho = $_SESSION['dateecho'];

$_SESSION['depthead'] = $_POST['depthead'];
$depthead = $_SESSION['depthead'];

$_SESSION['hrd'] = $_POST['hrd'];
$hrd = $_SESSION['hrd'];

$_SESSION['schooldirect'] = $_POST['schooldirect'];
$schooldirect = $_SESSION['schooldirect'];

$_SESSION['corporatehr'] = $_POST['corporatehr'];
$corporatehr = $_SESSION['corporatehr'];

$_SESSION['remarks'] = $_POST['remarks'];
$remarks = $_SESSION['remarks'];



$sql = "INSERT INTO employeelogs (datefiled, title, dateofseminar, venue, regcost, transcost, accomocost, 
totalexpense, dateecho, depthead, hrd, schooldirect, corporatehr, remarks, empid, classify) 
VALUES ('$datefiled', '$title', '$dateofseminar', '$venue', '$regcost', '$transcost', '$accomocost', 
'$totalexpense', '$dateecho', '$depthead', '$hrd', '$schooldirect', '$corporatehr', '$remarks', '$employeeid' , '$classify')";
$result = $conn->query($sql);

header('Location: employeeprofile.php');


?>