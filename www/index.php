<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);

require_once "database.php";

$conn = Database::getConnection();

$sql = "SHOW TABLES from vagrant";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
    print_r($row);
	echo "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
if($conn->connect_error){
	echo "error";
}else{
	echo "no error";
}


?>