<?php
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'testing');
  define('DB_USER','root'); 
  define('DB_PASSWORD',''); 
  $conn=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
  
$class = $_POST['class'];
$sa = $_POST['tse'];

$query="select * from tadvertisement ;";
if ($result= $conn->query($query)) {
    // output data of each row
    while( $row = $result->fetch_assoc()) {

       if($row["salary_expectation"]==$sa ||$row["salary_expectation"]<$sa  ){
           if($class==$row["from_class"] or $class==$row["to_class"] or ($class <$row["to_class"] and $class >$row["from_class"] )){
                               
                  $query2 = "select * from people ;";
                  if ($result2= $conn->query($query2)) {
    // output data of each row
                    while( $row2 = $result2->fetch_assoc()) {
                    $pai=0;
                    if($row2["NID"]==$row["id"]) {
                    echo "Name: " . $row2["firstName"]." ". $row2["lastName"]. " - Address: " . $row2["Address"]. "  Mobile No: " . $row2["MobilePhone"]. "<br>";
                    }
                    }
                   }


           }
       }
       }
       }
       else {
    echo "0 results";
}

$conn->close();
?>



