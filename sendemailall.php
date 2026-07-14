<!DOCTYPE html>
<html>
<head>
  <title>UPHSD Molino HRD Training Monitoring System | E-mail Training Logs </title>
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

    .emailstat-container {
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      padding: 25px;
      width: 300px;
    }
	
    .emailstat-container h2{
      text-align: center;
      margin-bottom: 20px;
    }
	
	.emailstat-container h3{
      text-align: center;
      margin-bottom: 20px;
    }
	
	.emailstat-container h4{
      text-align: center;
      margin-bottom: 10px;
    }
	
	.emailstat-container img {
	  align: center;
      width: 100%; /* Adjust the desired width */
      height: auto; /* Maintain aspect ratio */
    }

    .emailstat-container hr {
      border: none;
      height: 1px;
      background-color: #ddd;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .emailstat-container .button {
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

    .emailstat-container .button:hover {
      background-color: #45a049;
    }

    .emailstat-container .returner {
      background-color: #0074D9; /*#39cccc;*/
    }

    .emailstat-container .returner:hover {
      background-color: #005AA6; /*#2d9999;*/
    }
	
	.emailstat-container .backtodash {
      background-color: #ff851b;
    }

    .emailstat-container .backtodash:hover {
      background-color: #d47716;
    }
  </style>
</head>

<body>
  <div class="emailstat-container">
	<img src="img\perpetual-logo.png" />
	<h4>Molino HRD | Web-based Training Monitoring System</h4>
    <hr>

<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Connect to the database (example using mysqli extension)
$servername = "sql101.epizy.com";
$username = "epiz_34177382";
$password = "g8RD7S5lOp";
$dbname = "epiz_34177382_sad";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the database connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Execute the SQL query
$sql = "SELECT ID, title, dateofseminar, venue, remarks, classify, empid FROM employeelogs ORDER BY dateofseminar DESC";
$result = $conn->query($sql);


// Format the query result (example: convert to HTML table)
$table = '<table style="width: 100%; border-collapse: collapse;">';
$table .= '<tr><th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Full Name</th>
               <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Position</th>
               <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Department</th>
               <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Title</th>
               <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Date of Seminar</th>
               <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Venue</th>
               <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Remarks</th>                              
               <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">Classify</th></tr>';

while ($row = $result->fetch_assoc()) {

    $hello = $row['empid'];
    
$sql2 = "SELECT ID, fullname, position, department, classify FROM employee WHERE ID LIKE '$hello'";
$result2 = $conn->query($sql2);

while ($row2 = $result2->fetch_assoc()) {

    $table .= '<tr>';
    $table .= '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $row2['fullname'] . '</td>';
    $table .= '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $row2['position'] . '</td>';
    $table .= '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $row2['department'] . '</td>';
    $table .= '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $row['title'] . '</td>';
    $table .= '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $row['dateofseminar'] . '</td>';
    $table .= '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $row['venue'] . '</td>';
    $table .= '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">' . $row['remarks'] . '</td>';
    $table .= '<td>' . $row2['classify'] . '</td>';
    $table .= '</tr>';
    }
}

$table .= '</table>';

// Compose the email
$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp-relay.sendinblue.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'calongangelo1@gmail.com';
    $mail->Password = 'xsmtpsib-d693d293770bdcaf5d0855b80ba4fcf00a3e71f1266824590bf0e2900f3a34f6-8m964YBJkWDUp5Ag';
    $mail->Port = 587;

    // Set email details
    $mail->setFrom('calongangelo1@gmail.com');
    $mail->addAddress('michael.valle@perpetualdalta.edu.ph');
    $mail->Subject = 'Request for Training Logs - All Classification';

    // Attach the query result as HTML
    $mail->isHTML(true);
    $mail->Body = $table;

    // Send the email
    $mail->send();
    echo '<h4>E-mail sent successfully!</h4>';
} catch (Exception $e) {
    echo '<h4>E-mail could not be sent. Error:</h4>', $mail->ErrorInfo;
}

// Close the database connection
$conn->close();

?>

    <hr>
	<div style="width:45%; display:inline-block; margin-left: 5.5px; margin-right: 5.5px;">
	<a href="viewemployeelogs.php" class="button returner">Return</a>
	</div>
	<div style="width:45%; display:inline-block; margin-left: 5.5px; margin-right: 5.5px;">
	<a href="dashboard.php" class="button backtodash">To Dashboard</a>
	</div>
  </div>
</body>
</html>