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


$_SESSION['logname'] = $_POST['logname'];
$logname = $_SESSION['logname'];

$_SESSION['logtype'] = $_POST['logtype'];
$logtype = $_SESSION['logtype'];

$_SESSION['logprem'] = $_POST['logprem'];
$logprem = $_SESSION['logprem'];

$_SESSION['logdept'] = $_POST['logdept'];
$logdept = $_SESSION['logdept'];

$_SESSION['logfield'] = $_POST['logfield'];
$logfield = $_SESSION['logfield'];

$_SESSION['logyear'] = $_POST['logyear'];
$logyear = $_SESSION['logyear'];


$sql = "INSERT INTO `loglist`(`logname`, `logtype`, `logpremises`, `logdept`, `logfield` , `logyear`) 
                    VALUES ('$logname','$logtype','$logprem','$logdept','$logfield', '$logyear')";
$result = $conn->query($sql);

header('Location: index.php');
?><?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$_SESSION['logname'] = $_POST['logname'];
$logname = $_SESSION['logname'];

$_SESSION['logtype'] = $_POST['logtype'];
$logtype = $_SESSION['logtype'];

$_SESSION['logprem'] = $_POST['logprem'];
$logprem = $_SESSION['logprem'];

$_SESSION['logdept'] = $_POST['logdept'];
$logdept = $_SESSION['logdept'];

$_SESSION['logfield'] = $_POST['logfield'];
$logfield = $_SESSION['logfield'];

$_SESSION['logyear'] = $_POST['logyear'];
$logyear = $_SESSION['logyear'];


$sql = "INSERT INTO `loglist`(`logname`, `logtype`, `logpremises`, `logdept`, `logfield` , `logyear`) 
                    VALUES ('$logname','$logtype','$logprem','$logdept','$logfield', '$logyear')";
$result = $conn->query($sql);

header('Location: index.php');
?><?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$_SESSION['logname'] = $_POST['logname'];
$logname = $_SESSION['logname'];

$_SESSION['logtype'] = $_POST['logtype'];
$logtype = $_SESSION['logtype'];

$_SESSION['logprem'] = $_POST['logprem'];
$logprem = $_SESSION['logprem'];

$_SESSION['logdept'] = $_POST['logdept'];
$logdept = $_SESSION['logdept'];

$_SESSION['logfield'] = $_POST['logfield'];
$logfield = $_SESSION['logfield'];

$_SESSION['logyear'] = $_POST['logyear'];
$logyear = $_SESSION['logyear'];


$sql = "INSERT INTO `loglist`(`logname`, `logtype`, `logpremises`, `logdept`, `logfield` , `logyear`) 
                    VALUES ('$logname','$logtype','$logprem','$logdept','$logfield', '$logyear')";
$result = $conn->query($sql);

header('Location: index.php');
?><?php

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


$_SESSION['logname'] = $_POST['logname'];
$logname = $_SESSION['logname'];

$_SESSION['logtype'] = $_POST['logtype'];
$logtype = $_SESSION['logtype'];

$_SESSION['logprem'] = $_POST['logprem'];
$logprem = $_SESSION['logprem'];

$_SESSION['logdept'] = $_POST['logdept'];
$logdept = $_SESSION['logdept'];

$_SESSION['logfield'] = $_POST['logfield'];
$logfield = $_SESSION['logfield'];

$_SESSION['logyear'] = $_POST['logyear'];
$logyear = $_SESSION['logyear'];


$sql = "INSERT INTO `loglist`(`logname`, `logtype`, `logpremises`, `logdept`, `logfield` , `logyear`) 
                    VALUES ('$logname','$logtype','$logprem','$logdept','$logfield', '$logyear')";
$result = $conn->query($sql);

header('Location: index.php');
?><?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$_SESSION['logname'] = $_POST['logname'];
$logname = $_SESSION['logname'];

$_SESSION['logtype'] = $_POST['logtype'];
$logtype = $_SESSION['logtype'];

$_SESSION['logprem'] = $_POST['logprem'];
$logprem = $_SESSION['logprem'];

$_SESSION['logdept'] = $_POST['logdept'];
$logdept = $_SESSION['logdept'];

$_SESSION['logfield'] = $_POST['logfield'];
$logfield = $_SESSION['logfield'];

$_SESSION['logyear'] = $_POST['logyear'];
$logyear = $_SESSION['logyear'];


$sql = "INSERT INTO `loglist`(`logname`, `logtype`, `logpremises`, `logdept`, `logfield` , `logyear`) 
                    VALUES ('$logname','$logtype','$logprem','$logdept','$logfield', '$logyear')";
$result = $conn->query($sql);

header('Location: index.php');
?><?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$_SESSION['logname'] = $_POST['logname'];
$logname = $_SESSION['logname'];

$_SESSION['logtype'] = $_POST['logtype'];
$logtype = $_SESSION['logtype'];

$_SESSION['logprem'] = $_POST['logprem'];
$logprem = $_SESSION['logprem'];

$_SESSION['logdept'] = $_POST['logdept'];
$logdept = $_SESSION['logdept'];

$_SESSION['logfield'] = $_POST['logfield'];
$logfield = $_SESSION['logfield'];

$_SESSION['logyear'] = $_POST['logyear'];
$logyear = $_SESSION['logyear'];


$sql = "INSERT INTO `loglist`(`logname`, `logtype`, `logpremises`, `logdept`, `logfield` , `logyear`) 
                    VALUES ('$logname','$logtype','$logprem','$logdept','$logfield', '$logyear')";
$result = $conn->query($sql);

header('Location: index.php');
?><?php

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


$_SESSION['logname'] = $_POST['logname'];
$logname = $_SESSION['logname'];

$_SESSION['logtype'] = $_POST['logtype'];
$logtype = $_SESSION['logtype'];

$_SESSION['logprem'] = $_POST['logprem'];
$logprem = $_SESSION['logprem'];

$_SESSION['logdept'] = $_POST['logdept'];
$logdept = $_SESSION['logdept'];

$_SESSION['logfield'] = $_POST['logfield'];
$logfield = $_SESSION['logfield'];

$_SESSION['logyear'] = $_POST['logyear'];
$logyear = $_SESSION['logyear'];


$sql = "INSERT INTO `loglist`(`logname`, `logtype`, `logpremises`, `logdept`, `logfield` , `logyear`) 
                    VALUES ('$logname','$logtype','$logprem','$logdept','$logfield', '$logyear')";
$result = $conn->query($sql);

header('Location: index.php');
?><?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$_SESSION['logname'] = $_POST['logname'];
$logname = $_SESSION['logname'];

$_SESSION['logtype'] = $_POST['logtype'];
$logtype = $_SESSION['logtype'];

$_SESSION['logprem'] = $_POST['logprem'];
$logprem = $_SESSION['logprem'];

$_SESSION['logdept'] = $_POST['logdept'];
$logdept = $_SESSION['logdept'];

$_SESSION['logfield'] = $_POST['logfield'];
$logfield = $_SESSION['logfield'];

$_SESSION['logyear'] = $_POST['logyear'];
$logyear = $_SESSION['logyear'];


$sql = "INSERT INTO `loglist`(`logname`, `logtype`, `logpremises`, `logdept`, `logfield` , `logyear`) 
                    VALUES ('$logname','$logtype','$logprem','$logdept','$logfield', '$logyear')";
$result = $conn->query($sql);

header('Location: index.php');
?><?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$_SESSION['logname'] = $_POST['logname'];
$logname = $_SESSION['logname'];

$_SESSION['logtype'] = $_POST['logtype'];
$logtype = $_SESSION['logtype'];

$_SESSION['logprem'] = $_POST['logprem'];
$logprem = $_SESSION['logprem'];

$_SESSION['logdept'] = $_POST['logdept'];
$logdept = $_SESSION['logdept'];

$_SESSION['logfield'] = $_POST['logfield'];
$logfield = $_SESSION['logfield'];

$_SESSION['logyear'] = $_POST['logyear'];
$logyear = $_SESSION['logyear'];


$sql = "INSERT INTO `loglist`(`logname`, `logtype`, `logpremises`, `logdept`, `logfield` , `logyear`) 
                    VALUES ('$logname','$logtype','$logprem','$logdept','$logfield', '$logyear')";
$result = $conn->query($sql);

header('Location: index.php');
?><?php

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


$_SESSION['logname'] = $_POST['logname'];
$logname = $_SESSION['logname'];

$_SESSION['logtype'] = $_POST['logtype'];
$logtype = $_SESSION['logtype'];

$_SESSION['logprem'] = $_POST['logprem'];
$logprem = $_SESSION['logprem'];

$_SESSION['logdept'] = $_POST['logdept'];
$logdept = $_SESSION['logdept'];

$_SESSION['logfield'] = $_POST['logfield'];
$logfield = $_SESSION['logfield'];

$_SESSION['logyear'] = $_POST['logyear'];
$logyear = $_SESSION['logyear'];


$sql = "INSERT INTO `loglist`(`logname`, `logtype`, `logpremises`, `logdept`, `logfield` , `logyear`) 
                    VALUES ('$logname','$logtype','$logprem','$logdept','$logfield', '$logyear')";
$result = $conn->query($sql);

header('Location: index.php');
?><?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$_SESSION['logname'] = $_POST['logname'];
$logname = $_SESSION['logname'];

$_SESSION['logtype'] = $_POST['logtype'];
$logtype = $_SESSION['logtype'];

$_SESSION['logprem'] = $_POST['logprem'];
$logprem = $_SESSION['logprem'];

$_SESSION['logdept'] = $_POST['logdept'];
$logdept = $_SESSION['logdept'];

$_SESSION['logfield'] = $_POST['logfield'];
$logfield = $_SESSION['logfield'];

$_SESSION['logyear'] = $_POST['logyear'];
$logyear = $_SESSION['logyear'];


$sql = "INSERT INTO `loglist`(`logname`, `logtype`, `logpremises`, `logdept`, `logfield` , `logyear`) 
                    VALUES ('$logname','$logtype','$logprem','$logdept','$logfield', '$logyear')";
$result = $conn->query($sql);

header('Location: index.php');
?><?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$_SESSION['logname'] = $_POST['logname'];
$logname = $_SESSION['logname'];

$_SESSION['logtype'] = $_POST['logtype'];
$logtype = $_SESSION['logtype'];

$_SESSION['logprem'] = $_POST['logprem'];
$logprem = $_SESSION['logprem'];

$_SESSION['logdept'] = $_POST['logdept'];
$logdept = $_SESSION['logdept'];

$_SESSION['logfield'] = $_POST['logfield'];
$logfield = $_SESSION['logfield'];

$_SESSION['logyear'] = $_POST['logyear'];
$logyear = $_SESSION['logyear'];


$sql = "INSERT INTO `loglist`(`logname`, `logtype`, `logpremises`, `logdept`, `logfield` , `logyear`) 
                    VALUES ('$logname','$logtype','$logprem','$logdept','$logfield', '$logyear')";
$result = $conn->query($sql);

header('Location: index.php');
?>