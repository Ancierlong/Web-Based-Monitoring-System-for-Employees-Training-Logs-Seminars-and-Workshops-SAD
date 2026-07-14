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
$db = new mysqli('sql101.epizy.com', 'epiz_34177382', 'g8RD7S5lOp', 'epiz_34177382_sad');

session_regenerate_id();

$_SESSION['logid'] = $_POST['logid'];
$logid = (int)$_SESSION['logid'];

// Perform search query
$sql1 = "DELETE FROM employeelogs where ID = $logid";
$result1 = $db->query($sql1);


header('Location: removelog.php');
?>