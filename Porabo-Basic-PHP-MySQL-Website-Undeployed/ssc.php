<?php
define('DB_HOST', 'db4free.net');
  define('DB_NAME', 'porabodotcom');
  define('DB_USER','adnanadi');
  define('DB_PASSWORD','adbforfreednan');
  $conn=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
  

$parea = $_POST['parea'];


$p = "SELECT id,sub,willing_to_pay FROM studentadvertisement ;";
if ($result= $conn->query($p)) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


        

            $pq = "SELECT Address ,NID FROM people ;";
if ($result2= $conn->query($pq)) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {

        if($row2["Address"]==$parea and $row2["NID"]==$row["id"] ){
                           echo "id: " . $row["id"]. " - Sub: " . $row["sub"]. " " . $row["willing_to_pay"]. "<br>";
        }
        else{

        }
    }
} else {
    echo "0 results";
}
    }
} else {
    echo "0 results";
}

$conn->close();
?>
