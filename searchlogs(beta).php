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
$db = new mysqli('localhost', 'root', '', 'sad');

session_regenerate_id();

// Get search query
$query = $_GET['query'];

// Perform search query
$sql = "SELECT * FROM loglist WHERE logname LIKE '%$query%' OR logtype LIKE '%$query%' OR logpremises LIKE '%$query%' 
                                OR logdept LIKE '%$query%' OR logfield LIKE '%$query%' OR logyear LIKE '%$query%'";
$result = $db->query($sql);

if(isset($_GET['msg']))
    {
        $message = "<h3>Succsesfully Removed!</h3> <br>";
        echo $message;
    }
?>

<a href="viewlogs.php">Return</a>
<br>
<table class="table">
      <thead>
          <tr>
            <th>NAME</th>
            <th>TYPE</th>
            <th>PREMISES</th>
            <th>Department </th>
            <th>FIELD</th>
            <th>YEAR</th>
          </tr>
      </thead>
      <tbody>

<?php while ($row = $result->fetch_assoc()): ?>
  <div>
  <tr>
    <td><?php echo $row['logname']; ?></td>
    <td><?php echo $row['logtype']; ?></td>
    <td><?php echo $row['logpremises']; ?></td>
    <td><?php echo $row['logdept']; ?></td>
    <td><?php echo $row['logfield']?></td>
    <td><?php echo $row['logyear']?></td>
    <form method="post" action="removelog.php">
    <input hidden type="text" name="logID" value="<?php echo $row['logID']; ?>">
    <td><input type="submit" name="submit" value="Remove"></td>
    </form>
  </div>
<?php endwhile; ?>

</tr>
</tbody>
</table>

<?php
// Close database connection
mysqli_close($db);
?>





