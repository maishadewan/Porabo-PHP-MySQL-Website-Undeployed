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
  //$db=mysql_select_db(DB_NAME,$conn) or die("Failed to connect to MySQL: " . mysql_error());
  
$user = $_POST['user'];
$nid = $_POST['NID'];
$fname = $_POST['firstName'];
$mname = $_POST['middleName'];
$lname = $_POST['lastName'];
$gen = $_POST['Gender'];
$area = $_POST['Area'];
$cell = $_POST['cellNo'];

$sql = "INSERT INTO people (NID,Username,firstName,lastName,MiddleName,Gender,Address,MobilePhone) VALUES ('$nid','$user','$fname','$mname','$lname','$gen','$area','$cell')";

if ($conn->query($sql) === TRUE) {
    echo "Awesome, You have successfully registered !<br>";
    echo '<a href="login.html">Log In</a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</html>



