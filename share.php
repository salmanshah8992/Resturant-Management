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
    $a = $_POST["fullname"];
    $b = $_POST["mail"];

    $c = $_POST["gender"];

    $d = $_POST["img"];
  
    $e =$_POST["shareday"];
  
    $f = $_POST["dates"];
  
    $g = $_POST["msg"];
   

$sql="INSERT INTO share (fullname,mail,gender,img,shareday,dates,msg) VALUES ('$a','$b','$c','$d','$e','$f','$g')";

$mysqli->query($sql);
}
$mysqli->close();

?>
