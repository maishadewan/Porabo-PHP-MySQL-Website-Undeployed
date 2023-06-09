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
$ID = $_POST['user'];
 $Password = $_POST['NID'];


$query = mysqli_query($conn,"SELECT * FROM people where Username = '$ID' AND NID = '$Password' ") ;

$row = mysqli_num_rows($query);

if(!$row==0) {

echo "<div style ='font:21px/41px comin sans;color:#006400'>Hi $ID !</div><br>";

echo '<a href="apply.html">Apply Here</a><br>';

echo '<a href="searchS.html">Already Applied? Search Students Here !</a><br>';
echo '<a href="searchT.html">Already Applied? Search Teachers Here !</a><br>';
echo '<a href="sadv.html">Advertise Here As A Student</a><br>';
  echo '<a href="tadv.html">Advertise Here As A Teacher</a><br>';
    echo '<a href="EditDeleteSA.php?value_key='.$Password.'">Edit Your Student Advertisement?</a><br>';
       echo '<a href="EditDeleteTA.php?value_key2='.$Password.'">Edit Your Teacher Advertisement?</a><br>';
} else 
{
echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
}







?>
 </html>


