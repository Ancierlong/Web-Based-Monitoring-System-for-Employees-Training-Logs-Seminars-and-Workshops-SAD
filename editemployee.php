<!DOCTYPE html>
<html>
<head>
  <title>UPHSD Molino HRD Training Monitoring System | Edit Employee Details</title>
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

    .editemp-container {
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      padding: 20px;
      width: 700px;
    }

	.editemp-container .tophead1 {
	  width:50%;
	  display:inline-block;
      vertical-align: top;
	  margin-left: 12.5px;
	  margin-right: 12.5px;
	}

	.editemp-container .tophead2 {
	  width:40%;
	  display:inline-block;
	  margin-left: 12.5px;
	  margin-right: 12.5px;
	}
	
    .editemp-container h2{
      text-align: center;
      margin-bottom: 20px;
    }
	
	.editemp-container h3{
      text-align: center;
      margin-bottom: 20px;
    }
	
	.editemp-container h4{
      text-align: center;
      margin-bottom: 10px;
    }
	
	.editemp-container img {
	  align: center;
      width: 80%; /* Adjust the desired width */
      height: auto; /* Maintain aspect ratio */
    }
	
	.editemp-container select {
      width: 100%;
      padding: 7.5px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
	
	.editemp-container hr {
      border: none;
      height: 1px;
      background-color: #ddd;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .editemp-container input[type="text"],
    .editemp-container input[type="date"] {
      width: 100%;
      padding: 7.5px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
	
	.editemp-container label {
	  font-size: 13px;
	  font-weight: bold;
	}
	
	.editemp-container .button {
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

    .editemp-container .button:hover {
      background-color: #45a049;
    }

    .editemp-container input[type="submit"] {
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

    .editemp-container input[type="submit"]:hover {
      background-color: #3d8b40;
    }
	
	.editemp-container .returner {
      background-color: #0074D9; /*#39cccc;*/
    }

    .editemp-container .returner:hover {
      background-color: #005AA6; /*#2d9999;*/
    }
	
	.editemp-container .backtodash {
      background-color: #ff851b;
    }

    .editemp-container .backtodash:hover {
      background-color: #d47716;
    }
	
	.editemp-divider {
	  width: 46.5%;
	  display:inline-block;
	  margin-left: 10px;
	  margin-right: 10px;
	  vertical-align: top;
	}
	
	.editemp-divider span {
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

$db = new mysqli('sql101.epizy.com', 'epiz_34177382', 'g8RD7S5lOp', 'epiz_34177382_sad');

$_SESSION['employeeid'] = $_POST['employeeid'];

$int = (int)$_SESSION['employeeid'];

$sql = "SELECT ID, fullname, position, department, empstatus, classify FROM employee where ID = $int";
$result = $db->query($sql);

session_regenerate_id();

?>

<?php while ($row = $result->fetch_assoc()):?>
<body>
  <div class="editemp-container">
    <div class="tophead1">
	<img src="img\perpetual-logo.png" />
	</div>
	<div class="tophead2">
	<h4>Molino HR Department | Web-based Training Monitoring System</h4>
	<h2>Edit Employee Details</h2>
	</div>
    <form method="post" action="editingemployee.php">
      <div class="editemp-divider">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" value="<?php echo $row['fullname'] ?>" required>
        <br>

        <label for="position">Position:</label>
        <input type="text" id="position" name="position" value="<?php echo $row['position'] ?>"required>
        <br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" value="<?php echo $row['department'] ?>" required>
        <br>
      </div><div class="editemp-divider">
        <label for="empstatus">Employment status:</label>
        <input type="text" id="empstatus" name="empstatus" value="<?php echo $row['empstatus'] ?>" required>
        <br>

        <label for="classify">Classification:</label>
        <select type="text" id="classify" name="classify"  required>
                <option value="Teaching">Teaching</option>
                <option value="Non-Teaching">Non-Teaching</option>
                <option value="Administration">Administration</option>
        </select>


                <input type="hidden" id="employeeid" name="employeeid" value="<?php echo $row['ID']; ?>">

      </div>
        <input type="submit" name="submit" value="Update">
    </form>
    <hr>
	<div style="width:46%; display:inline-block; margin-left: 12.5px; margin-right: 12.5px;">
	<a href="employeeprofile.php" class="button returner">Return</a>
	</div>
	<div style="width:46%; display:inline-block; margin-left: 12.5px; margin-right: 12.5px;">
	<a href="dashboard.php" class="button backtodash">Back to Dashboard</a>
	</div>
  </div>
    <?php endwhile; ?>

</body>
</html>