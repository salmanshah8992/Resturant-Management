<?php

$link = mysqli_connect("localhost", "root","", "wastefood");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "Successfufly";

$sql="SELECT * FROM  resturant";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        echo "<table border=1 >";
        echo "<tr>";
        echo "<th>Res No</th>";
        echo "<th>ID No</th>";
        echo "<th>Resturent Name</th>";
        echo "<th>E-mail</th>";
        echo "<th>Phone Number</th>";
        echo "<th>Food quantity</th>";
        echo "<th>Location</th>";
      
    echo "</tr>";
    echo "</tr>";
        

       echo "</tr>";
    

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td>" . $row['res_id'] ."</td>";
            echo "<td>" . $row['id'] ."</td>";
            echo "<td>" . $row['f_name'] ."</td>";
            echo "<td>" . $row['mail'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['r_amount'] . "</td>";
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
