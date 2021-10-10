<?php

$link = mysqli_connect("localhost", "root","", "wastefood");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "Successfufly";

//$query = "SELECT SUM(amount) AS sum FROM food";
//$query_result =mysqli_query($link,$query);
//while($row =mysqli_fetch_assoc($query_result)){
//    $output="total amount "." ".$row['amount'];
//}

$sql="SELECT * FROM  food";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        echo "<table border=1 >";
        echo "<tr>";
        echo "<th>ID No</th>";
        echo "<th>Name</th>";
        echo "<th>Phone Number</th>";
        echo "<th>Food quantity</th>";
        echo "<th>location</th>";
       
        
      
    echo "</tr>";
    echo "</tr>";
        

       echo "</tr>";
    

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td>" . $row['id'] ."</td>";
            echo "<td>" . $row['f_name'] ."</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['amount'] . "</td>";
            echo "<td>" . $row['locations'] . "</td>";
           
            
        echo "</tr>";
    }
    echo "</table>";
   
    mysqli_free_result($result);
} else{
    echo "No records matching your query were found.";
}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
?>
