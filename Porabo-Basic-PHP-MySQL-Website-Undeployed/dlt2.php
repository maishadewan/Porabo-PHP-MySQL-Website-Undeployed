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

if(isset($_GET['value_key11'])){
  $a = $_GET['value_key11']; //some_value

 
}
if(isset($_GET['value_key12'])){
  $b = $_GET['value_key12']; //some_value

}
if(isset($_GET['value_key13'])){
  $c = $_GET['value_key13']; //some_value

}



$p="select * from tadvertisement;";
 if ($result2= $conn->query($p)) {
            while( $row2 = $result2->fetch_assoc()) {
              if($row2["id"]==$a AND $row2["sub"]==$b AND $row2["from_class"]==$c ){


               $sql = "DELETE FROM tadvertisement  WHERE (id=$a AND from_class='$c' AND sub='$b')  ; ";


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