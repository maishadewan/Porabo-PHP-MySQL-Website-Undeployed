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
$sname = $_POST['sName'];
$cname = $_POST['cName'];
$uname = $_POST['uName'];


$sql = "INSERT INTO teacher VALUES ('$nid','$sname','$cname','$uname',null)";

if ($conn->query($sql) === TRUE) {
    echo "Awesome, You have successfully applied as a teacher !<br>";
    echo '<a href="tadv.html">Advertise Here</a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</html>