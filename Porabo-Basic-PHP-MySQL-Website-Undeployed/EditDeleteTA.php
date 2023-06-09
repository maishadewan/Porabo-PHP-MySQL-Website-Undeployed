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

if(isset($_GET['value_key2'])){
  $var = $_GET['value_key2']; //some_value
}
$pai=0;
echo "You posted following Advertisements<br>";

$p="select * from tadvertisement;";
          if ($result2= $conn->query($p)) {
            while( $row2 = $result2->fetch_assoc()) {
              if($row2["id"]==$var ){

              //echo "<a href="dlt2.php?value_key='.$row2["id"].'"> Sub: " . $row2["class"]." " . " Willing to pay = " . $row2["willing_to_pay"] "<br>';
                
               $a=$row2["id"]  ;
                $b= $row2["sub"]  ;
                $c=  $row2["from_class"] ;
                echo '<a href="dlt2.php?value_key11='.$a.'&value_key12='.$b.'&value_key13='.$c.'">Sub: " '. $row2["sub"].'" " . " Salary Expectation = " '. $row2["salary_expectation"].'"" . " From Class = " '. $row2["from_class"] .'"" . "to class = " '. $row2["to_class"].'"Delete this?" </a><br>';

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
            $conn->close();
?>