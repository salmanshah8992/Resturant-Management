<?php

$mysqli = new mysqli("localhost", "root", "", "wastefood");
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 else{
// Print host information
echo "Connect Successfully. Host info: " . $mysqli->host_info;
 }

// define variables and set to empty values
if (isset($_POST['submit'])){
    $a = $_POST["f_name"];
    $b = $_POST["mail"];

    $c = $_POST["phone"];

    $d = $_POST["r_amount"];
  
    $e =$_POST["locations"];
  
$sql="INSERT INTO resturent (f_name,mail,phone,amount,locations) VALUES ('$a','$b','$c','$d','$e')";


$mysqli->query($sql);
}
$mysqli->close();

?>
