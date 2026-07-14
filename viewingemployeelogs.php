<!DOCTYPE html>
<html>
<head>
  <title>UPHSD Molino HRD Training Monitoring System | Training Logs Search </title>
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

    .logsearch-container {
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      padding: 20px;
      width: 800px;
    }

	.logsearch-container .tophead1 {
	  width: 50%;
	  display: inline-block;
      vertical-align: top;
	  margin-left: 12.5px;
	  margin-right: 12.5px;
	}

	.logsearch-container .tophead2 {
	  width: 40%;
	  display: inline-block;
      vertical-align: top;
	  margin-left: 12.5px;
	  margin-right: 12.5px;
	}
	
    .logsearch-container h2{
      text-align: center;
      margin-bottom: 20px;
    }
	
	.logsearch-container h3{
      text-align: center;
      margin-bottom: 20px;
    }
	
	.logsearch-container h4{
      text-align: center;
      margin-bottom: 10px;
    }
	
	.logsearch-container img {
	  align: center;
      width: 75%; /* Adjust the desired width */
      height: auto; /* Maintain aspect ratio */
    }

    .logsearch-container hr {
      border: none;
      height: 1px;
      background-color: #ddd;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .logsearch-container table {
      width: 100%;
      border-collapse: collapse;
      font-family: sans-serif;
      font-size: 14px;
    }

    .logsearch-container th,
    .logsearch-container td {
      padding: 10px;
      text-align: left;
      border: 1px solid #ddd;
    }

    .logsearch-container th {
      background-color: #2E4053;
      color: #fff;
    }

    .logsearch-container tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .logsearch-container tr:hover {
      background-color: #ddd;
    }

    .logsearch-container .button {
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

    .logsearch-container .button:hover {
      background-color: #45a049;
    }

    .logsearch-container .returner {
      background-color: #0074D9; /*#39cccc;*/
    }

    .logsearch-container .returner:hover {
      background-color: #005AA6; /*#2d9999;*/
    }
	
	.logsearch-container .backtodash {
      background-color: #ff851b;
    }

    .logsearch-container .backtodash:hover {
      background-color: #d47716;
    }
	
	.logsearch-divider {
	  width: 30%;
	  display: inline-block;
	  margin-left: 12.5px;
	  margin-right: 12.5px;
	  vertical-align: top;
	}
  </style>
</head>

<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['username'])) {
	header('Location: index.php');
	exit;
}

// Connect to database
$db = new mysqli('sql101.epizy.com', 'epiz_34177382', 'g8RD7S5lOp', 'epiz_34177382_sad');

session_regenerate_id();

// Get search query
$query = $_POST['classify'];

// Perform search query
?>
<body>

  <div class="logsearch-container">
    <div class="tophead1">
	<img src="img\perpetual-logo.png" />
	</div>
	<div class="tophead2">
	<h4>Molino HR Department | Web-based Training Monitoring System</h4>
	<h2>Training Logs Search</h2>
	</div>
	<hr>
    
<table class="table">
      <thead>
          <tr class="top-tr">
            <th>Full Name</th>
            <th>Position</th>
            <th>Department</th>
            <th>Title</th>
            <th>Date of Seminar</th>
            <th>Venue</th>
            <th>Remarks</th>
            <th>Classify</th>
          </tr>
      </thead>
      <tbody>

<?php 

$sql1 = "SELECT ID, title, dateofseminar, venue, remarks, classify, empid FROM employeelogs WHERE classify LIKE '$query' ORDER BY dateofseminar DESC ";
$result1 = $db->query($sql1);

while ($row1 = $result1->fetch_assoc()): ?>
  <div>
    <tr>
    <?php
    $hello = $row1['empid'];
    $sql2 = "SELECT ID, fullname, position, department, classify FROM employee WHERE ID LIKE '$hello'";
    $result2 = $db->query($sql2);
    ?>

    <?php
    while ($row2 = $result2->fetch_assoc()):
    ?>

    <td><?php echo $row2['fullname']?></td>
    <td><?php echo $row2['position']?></td>
    <td><?php echo $row2['department']?></td>
    <td><?php echo $row1['title']?></td>
    <td><?php echo $row1['dateofseminar']?></td>
    <td><?php echo $row1['venue']?></td>
    <td><?php echo $row1['remarks']?></td>
    <td><?php echo $row2['classify']?></td>
    <form action="employeeprofile.php" method="post">
    <input type="hidden" name="employeeid" value="<?php echo $row2['ID']; ?>">
    </form>
    </tr>
  </div>

<?php 
endwhile;
endwhile; 
?>

</tr>
</tbody>
</table>

<?php
// Close database connection
mysqli_close($db);
?>

    <hr>
	<div style="width:46%; display:inline-block; margin-left: 13.5px; margin-right: 13.5px;">
	<a href="viewemployeelogs.php" class="button returner">Return</a>
	</div>
	<div style="width:46%; display:inline-block; margin-left: 13.5px; margin-right: 13.5px;">
	<a href="dashboard.php" class="button backtodash">Back to Dashboard</a>
	</div>
  </div>
</body>
</html>