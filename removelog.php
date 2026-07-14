<!DOCTYPE html>
<html>
<head>
  <title>UPHSD Molino HRD Training Monitoring System | Remove Training Log(s) </title>
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

    .remlog-container {
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      padding: 20px;
      width: 1000px;
    }

	.remlog-container .tophead1 {
	  width: 50%;
	  display: inline-block;
      vertical-align: top;
	  margin-left: 12.5px;
	  margin-right: 12.5px;
	}

	.remlog-container .tophead2 {
	  width: 40%;
	  display: inline-block;
      vertical-align: top;
	  margin-left: 12.5px;
	  margin-right: 12.5px;
	}
	
    .remlog-container h2{
      text-align: center;
      margin-bottom: 20px;
    }
	
	.remlog-container h3{
      text-align: center;
      margin-bottom: 20px;
    }
	
	.remlog-container h4{
      text-align: center;
      margin-bottom: 10px;
    }
	
	.remlog-container img {
	  align: center;
      width: 60%; /* Adjust the desired width */
      height: auto; /* Maintain aspect ratio */
    }

    .remlog-container hr {
      border: none;
      height: 1px;
      background-color: #ddd;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .remlog-container table {
      width: 100%;
      border-collapse: collapse;
      font-family: sans-serif;
      font-size: 14px;
    }

    .remlog-container th,
    .remlog-container td {
      padding: 10px;
      text-align: left;
      border: 1px solid #ddd;
    }

    .remlog-container th {
      background-color: #2D9999;
      color: #fff;
    }

    .remlog-container tr:nth-child(even) {
      background-color: #f2f2f2;
    }
/*
    .remlog-container tr:hover {
      background-color: #ddd;
    }
*/
    .remlog-container .button {
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

    .remlog-container .button:hover {
      background-color: #45a049;
    }

    .remlog-container .returner {
      background-color: #0074D9; /*#39cccc;*/
    }

    .remlog-container .returner:hover {
      background-color: #005AA6; /*#2d9999;*/
    }
	
	.remlog-container .backtodash {
      background-color: #ff851b;
    }

    .remlog-container .backtodash:hover {
      background-color: #d47716;
    }
	
	.remlog-divider {
	  width: 30%;
	  display: inline-block;
	  margin-left: 12.5px;
	  margin-right: 12.5px;
	  vertical-align: top;
	}

    td.buttons {
      text-align: center;
    }

    td.buttons button {
      padding: 8px 16px;
      margin-right: 8px;
      border: none;
      border-radius: 4px;
      background-color: #FF4136;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    td.buttons button:hover {
      filter: brightness(140%);
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

// Connect to database
$db = new mysqli('sql101.epizy.com', 'epiz_34177382', 'g8RD7S5lOp', 'epiz_34177382_sad');

session_regenerate_id();

$int = (int)$_SESSION['employeeid'];

// Perform search query
$sql1 = "SELECT ID FROM employee where ID = $int";
$result1 = $db->query($sql1);
?>

<body>
  <div class="remlog-container">
    <div class="tophead1">
	<img src="img\perpetual-logo.png" />
	</div>
	<div class="tophead2">
	<h4>Molino HR Department | Web-based Training Monitoring System</h4>
	<h2>Remove Training Log(s)</h2>
	</div>
	<hr>
    <!--<h5><i>To remove a training log, click the Remove button on the end of the row of the target log.</i></h5>-->
<table class="table">
      <thead>
          <tr>
            <th>Date Filed</th>
            <th>Title</th>
            <th>Date of Seminar</th>
            <th>Venue</th>
            <th>HRD</th>
            <th>Remarks</th>
          </tr>
      </thead>
      <tbody>

<?php while ($row1 = $result1->fetch_assoc()): ?>
  <div>
    <tr>
    <?php
    $hello = $row1['ID'];
    $sql = "SELECT ID, title, datefiled, dateofseminar, venue, hrd, remarks FROM employeelogs WHERE empid LIKE '%$hello%' ORDER BY dateofseminar DESC";
    $result2 = $db->query($sql);
    ?>

    <?php
    while ($row2 = $result2->fetch_assoc()):
    ?>

    <td><?php echo $row2['datefiled']?></td>
    <td><?php echo $row2['title']?></td>
    <td><?php echo $row2['dateofseminar']?></td>
    <td><?php echo $row2['venue']?></td>
    <td><?php echo $row2['hrd']?></td>
    <td><?php echo $row2['remarks']?></td>
    <form action="removinglog.php" method="post" onsubmit="return confirm('You are trying to remove an entry log\nfrom the selected employee.\n\nAre you sure you want to proceed?');">
    <input type="hidden" name="logid" value="<?php echo $row2['ID']; ?>">
    <td class="buttons"><button type="submit">Remove</button></td>
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
    <br><br>
	<div style="width:46%; display:inline-block; margin-left: 15px; margin-right: 15px;">
	<a href="employeeprofile.php" class="button returner">Return</a>
	</div>
	<div style="width:46%; display:inline-block; margin-left: 15px; margin-right: 15px;">
	<a href="dashboard.php" class="button backtodash">Back to Dashboard</a>
	</div>
  </div>
</body>
</html>