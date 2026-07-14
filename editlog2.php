<!DOCTYPE html>
<html>
<head>
  <title>UPHSD Molino HRD Training Monitoring System | Add Employee Log</title>
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

    .addemplog-container {
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      padding: 15px;
      width: 900px;
    }

	.addemplog-container .tophead1 {
	  width:50%;
	  display:inline-block;
      vertical-align: top;
	  margin-left: 12.5px;
	  margin-right: 12.5px;
	}

	.addemplog-container .tophead2 {
	  width:40%;
	  display:inline-block;
	  margin-left: 12.5px;
	  margin-right: 12.5px;
	}
	
    .addemplog-container h2{
      text-align: center;
      margin-bottom: 20px;
    }
	
	.addemplog-container h3{
      text-align: center;
      margin-bottom: 20px;
    }
	
	.addemplog-container h4{
      text-align: center;
      margin-bottom: 10px;
    }
	
	.addemplog-container img {
	  align: center;
      width: 70%; /* Adjust the desired width */
      height: auto; /* Maintain aspect ratio */
    }
	
	.addemplog-container select {
      width: 100%;
      padding: 7.5px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
	
	.addemplog-container hr {
      border: none;
      height: 1px;
      background-color: #ddd;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .addemplog-container input[type="text"],
    .addemplog-container input[type="number"],
    .addemplog-container input[type="date"] {
      width: 100%;
      padding: 7.5px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
	
	.addemplog-container label {
	  font-size: 13px;
	  font-weight: bold;
	}
	
	.addemplog-container .button {
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

    .addemplog-container .button:hover {
      background-color: #3d8b40;
    }

    .addemplog-container input[type="submit"] {
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

    .addemplog-container input[type="submit"]:hover {
      background-color: #3d8b40;
    }
	
	.addemplog-container .returner {
      background-color: #0074D9; /*#39cccc;*/
    }

    .addemplog-container .returner:hover {
      background-color: #005AA6; /*#2d9999;*/
    }
	
	.addemplog-container .backtodash {
      background-color: #ff851b;
    }

    .addemplog-container .backtodash:hover {
      background-color: #d47716;
    }
	
	.addemplog-divider {
	  width:30%;
	  display:inline-block;
	  margin-left: 12.5px;
	  margin-right: 12.5px;
	  vertical-align: top;
	}
	
	.addemplog-divider span {
	  font-family: sans-serif;
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
$db = new mysqli('sql101.epizy.com', 'epiz_34177382', 'g8RD7S5lOp', 'epiz_34177382_sad');

session_regenerate_id();

$_SESSION['employeeid'] = $_POST['employeeid'];
$int2 = (int)$_SESSION['employeeid'];

$_SESSION['logid'] = $_POST['logid'];
$int = (int)$_SESSION['logid'];

$_SESSION['classify'] = $_POST['classify'];
$int3 = (int)$_SESSION['classify'];

// Perform search query
$sql = "SELECT ID, datefiled, title, dateofseminar, venue, regcost, transcost, accomocost, totalexpense,
dateecho, depthead, hrd, schooldirect, corporatehr, remarks FROM employeelogs where ID = $int";
$result = $db->query($sql);


$sql2 = "SELECT ID, classify FROM employee where ID = $int2";
$result2 = $db->query($sql2);

?>

<body>
  <div class="addemplog-container">
    <div class="tophead1">
	<img src="img\perpetual-logo.png" />
	</div>
	<div class="tophead2">
	<h4>Molino HR Department | Web-based Training Monitoring System</h4>
	<h2>Edit Employee Log</h2>
	</div>
	<hr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <form method="post" action="editinglog.php">
		<div class="addemplog-divider">
        <label for="datefiled">Date Filed:</label>
        <input type="date" id="datefiled" name="datefiled" value="<?php echo $row['datefiled']; ?>" equired>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>" required>
        <br>
        <label for="dateofseminar">Date of Seminar:</label>
        <input type="date" id="dateofseminar" name="dateofseminar" value="<?php echo $row['dateofseminar']; ?>" required>
        <br>
        <label for="venue">Venue:</label>
        <input type="text" id="venue" name="venue" value="<?php echo $row['venue']; ?>" required></textarea>
        <br>
        <label for="regcost">Registration Cost:</label>
        <input type="number" id="regcost" name="regcost" value="<?php echo $row['regcost']; ?>" required>
        <br>
		</div>
		<div class="addemplog-divider">
        <label for="transcost">Transportation Cost:</label>
        <input type="number" id="transcost" name="transcost" value="<?php echo $row['transcost']; ?>" required>
        <br>
        <label for="accomocost">Accomodation Cost:</label>
        <input type="number" id="accomocost" name="accomocost" value="<?php echo $row['accomocost']; ?>" required>
        <br>
        <label for="totalexpense">Total Expense:</label>
        <input type="number" id="totalexpense" name="totalexpense" value="<?php echo $row['totalexpense']; ?>" required>
        <br>
        <label for="dateecho">Date of Echoing:</label>
        <input type="date" id="dateecho" name="dateecho" value="<?php echo $row['dateecho']; ?>" required>
        <br>
        <label for="depthead">Department Head:</label>
        <input type="text" id="depthead" name="depthead" value="<?php echo $row['depthead']; ?>" required>
        <br>
		</div>
		<div class="addemplog-divider">
        <label for="hrd">HRD:</label>
        <input type="text" id="hrd" name="hrd" value="<?php echo $row['hrd']; ?>" required>
        <br>
        <label for="schooldirect">School Director:</label>
        <input type="text" id="schooldirect" name="schooldirect" value="<?php echo $row['schooldirect']; ?>" required>
        <br>
        <label for="corporatehr">Corporate HR:</label>
        <input type="text" id="corporatehr" name="corporatehr" value="<?php echo $row['corporatehr']; ?>" required>
        <br>
        <label for="remarks">Remarks:</label><br>
        <input type="radio" name="remarks" id="remarks" value="done" /><span>Done</span>
        <input type="radio" name="remarks" id="remarks" value="cancelled" /><span>Cancelled</span>
        <br>
		</div>
        <?php while ($row2 = $result2->fetch_assoc()): ?>
        <input type="hidden" id="employeeid" name="employeeid" value="<?php echo $row2['ID']; ?>">
        <input type="hidden" id="classify" name="classify" value="<?php echo $row2['classify']; ?>">
        <?php endwhile; ?>
        <input type="hidden" id="logid" name="logid" value="<?php echo $row['ID']; ?>">
        <input type="submit" name="submit" value="Submit">

    </form>
    	<hr>
	<div style="width:46%; display:inline-block; margin-left: 15px; margin-right: 15px;">
	<a href="editlog.php" class="button returner">Return</a>
	</div>
	<div style="width:46%; display:inline-block; margin-left: 15px; margin-right: 15px;">
	<a href="dashboard.php" class="button backtodash">Back to Dashboard</a>
	</div>
  </div>
    <?php endwhile; ?>

</body>
</html>