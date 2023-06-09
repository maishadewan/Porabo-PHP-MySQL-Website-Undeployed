<?php
  define('DB_HOST', 'db4free.net');
  define('DB_NAME', 'porabodotcom');
  define('DB_USER','adnanadi');
  define('DB_PASSWORD','adbforfreednan');
  $conn=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
  
$nid = $_POST['NID'];
$iname = $_POST['iName'];
$cc = $_POST['cC'];
$pg = $_POST['pG'];


$sql = "INSERT INTO student VALUES ('$nid','$iname','$cc','$pg',null)";

if ($conn->query($sql) === TRUE) {
    echo "Awesome, You have successfully applied as a student !<br>";
    echo '<a href="sadv.html">Advertise Here</a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>