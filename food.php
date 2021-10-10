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
    
    $b = $_POST["phone"];

    $c = $_POST["amount"];
  
    $d =$_POST["locations"];
  
$sql="INSERT INTO food (f_name,phone,amount,locations) VALUES ('$a','$b','$c','$d')";


$mysqli->query($sql);
}
$mysqli->close();

?>
