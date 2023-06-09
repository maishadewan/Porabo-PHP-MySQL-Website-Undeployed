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

if(isset($_GET['value_key1'])){
  $a = $_GET['value_key1']; //some_value
 
}
if(isset($_GET['value_key2'])){
  $b = $_GET['value_key2']; //some_value

}
if(isset($_GET['value_key3'])){
  $c = $_GET['value_key3']; //some_value

}



$p="select * from studentadvertisement;";
 if ($result2= $conn->query($p)) {
            while( $row2 = $result2->fetch_assoc()) {
              if($row2["id"]==$a AND $row2["sub"]==$b AND $row2["willing_to_pay"]==$c ){


               $sql = "DELETE FROM studentadvertisement  WHERE (studentadvertisement.id=$a AND studentadvertisement.willing_to_pay=$c AND sub='$b')  ; ";


                   if ($conn->query($sql) === TRUE) {
                      echo "successfully deleted advertisement";
                      } 
                   else {
                     echo "Error deleting record: " . $conn->error;
                    }




              }
              else{}
            }
            }


            $conn->close();

               ?>