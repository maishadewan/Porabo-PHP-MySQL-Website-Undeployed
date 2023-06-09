
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
  
$class = $_POST['class'];
$parea = $_POST['parea'];




$query = "select student.class,people.Address,people.NID,people.firstName,people.lastName,people.middleName,people.MobilePhone from student,people where student.class= '$class' AND people.Address='$parea' AND student.s_id=people.NID;";
if ($result= $conn->query($query)) {
    // output data of each row
    while( $row = $result->fetch_assoc()) {
      $pai=0;

           $p="select id from studentadvertisement;";
          if ($result2= $conn->query($p)) {
            while( $row2 = $result2->fetch_assoc()) {
              if($row2["id"]==$row["NID"] ){
              echo " Name: " . $row["firstName"]." " . $row["lastName"]. " Location " . $row["Address"]. " " . $row["MobilePhone"]. "<br>";
              $pai=1;
              }
              else{

              }

            }
            if($pai==0){
            echo " 0 results";
            }
            }
          else{
            echo "0 results";
            }
    }
} else {
    echo "0 results";
}

$conn->close();
?>




