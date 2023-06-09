<?php
  define('DB_HOST', 'db4free.net');
  define('DB_NAME', 'porabodotcom');
  define('DB_USER','adnanadi');
  define('DB_PASSWORD','adbforfreednan');
  $conn=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
  
$nid = $_POST['NID'];
$sub = $_POST['sub'];
$pay = $_POST['Wpay'];


$sql = "INSERT INTO studentadvertisement VALUES ('$nid','$sub','$pay')";

if ($conn->query($sql) === TRUE) {
    echo "Awesome, You have successfully advertise, your teacher will look for you very soon !<br>";
    echo '<a href="searchT.html">Search Teacher?</a><br>';
     echo '<a href="EditDeleteSA.php?value_key='.$nid.'">Edit Your Student Advertisement?</a><br>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>