  <!DOCTYPE HTML>
   <html>
   <head>



 <link rel="stylesheet" type="text/css" href="style7.css">
 </head> <body id="body-color"> <div id="Sign-In">

<?php
define('DB_HOST', 'db4free.net');
  define('DB_NAME', 'porabodotcom');
  define('DB_USER','adnanadi');
  define('DB_PASSWORD','adbforfreednan');
  $conn=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
  
$class = $_POST['class'];
$parea = $_POST['parea'];





$query = "select * from people ;";
if ($result= $conn->query($query)) {
    // output data of each row
    while( $row = $result->fetch_assoc()) {
      $pai=0;

           $p="select * from tadvertisement where id=$row[NID];";
          if ($result2= $conn->query($p)) {
            while( $row2 = $result2->fetch_assoc()) {
              if($row["Address"]==$parea ){


              if($class==$row2["from_class"] or $class==$row2["to_class"] or ($class <$row2["to_class"] and $class >$row2["from_class"] )){
               echo "Name: " . $row["firstName"]." ". $row["lastName"]. " - Address: " . $row["Address"]. "  Mobile No: " . $row["MobilePhone"]. "<br>" ;
                 $pai=1;
              }

              else{}
              }
              else{

              }

            }
            if($pai==0){
            echo "";
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
</html>



