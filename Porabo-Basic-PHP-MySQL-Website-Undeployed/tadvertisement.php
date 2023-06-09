
<!DOCTYPE HTML>

<html>
   <head>



 <link rel="stylesheet" type="text/css" href="style3.css">
 </head> <body id="body-color"> <div id="Sign-In">
 <?php
  define('DB_HOST', 'db4free.net');
  define('DB_NAME', 'porabodotcom');
  define('DB_USER','adnanadi');
  define('DB_PASSWORD','adbforfreednan');
  $conn=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
  
$nid = $_POST['NID'];
$sub = $_POST['sub'];
    $fc = $_POST['fC'];
    $tc = $_POST['tC'];
$pay = $_POST['Epay'];


$sql = "INSERT INTO tadvertisement VALUES ('$nid','$sub','$fc','$tc','$pay')";

if ($conn->query($sql) === TRUE) {
    echo "Awesome, You have successfully advertise, your student will look for you very soon !<br>";
    echo '<a href="searchS.html">Search student?</a><br>';
    echo '<a href="EditDeleteTA.php?value_key2='.$nid.'">Edit Your Teacher Advertisement?</a><br>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</html>