<?php

$link = mysqli_connect("localhost", "root","", "wastefood");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "Successfufly";

$sql="SELECT * FROM  share";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        echo "<table border=1 >";
        echo "<tr>";
        echo "<th>ID No</th>";
        echo "<th>Name</th>";
        echo "<th>E-mail</th>";
        echo "<th>Gender</th>";
        echo "<th>Choose Your Photo</th>";
        echo "<th>Share Your Day As a</th>";
        echo "<th>Share your date</th>";
        echo "<th>Message</th>";
        
      
    echo "</tr>";
    echo "</tr>";
        

       echo "</tr>";
    

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td>" . $row['id'] ."</td>";
            echo "<td>" . $row['fullname'] ."</td>";
            echo "<td>" . $row['mail'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['img'] . "</td>";
            echo "<td>" . $row['shareday'] . "</td>";
            echo "<td>" . $row['dates'] . "</td>";
            echo "<td>" . $row['msg'] . "</td>";
            
            
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
