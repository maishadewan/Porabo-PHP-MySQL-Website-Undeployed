<?php
 define('DB_HOST', 'db4free.net');
  define('DB_NAME', 'porabodotcom');
  define('DB_USER','adnanadi');
  define('DB_PASSWORD','adbforfreednan'); 
  $conn=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
  
$class = $_POST['class'];
$pam = $_POST['pamount'];

$p = "SELECT * FROM studentadvertisement LEFT JOIN student ON student.s_id=studentadvertisement.id WHERE (studentadvertisement.willing_to_pay= $pam AND student.class=$class) OR (studentadvertisement.willing_to_pay> $pam AND student.class=$class);";
if ($result= $conn->query($p)) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Sub: " . $row["sub"]. " " . $row["willing_to_pay"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

