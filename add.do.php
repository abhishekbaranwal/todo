<?php

inClude("db.php");


     print_r($POST);

        $name=$_POST["name"];
        $starttime=$_POST["starttime"];
        $stoptime=$_POST["stoptime"];
        $locaion=$_POST["location"];
        $descripition=$_POST["description"];
       

 $sql = "INSERT INTO tasks ( name,description,starttime,stoptime,location) VALUES ($name, $desription, $starttime, $stoptime,$location)";
            
            echo $sql;

if(mysqli_query($conn,$sql)){
    echo"Successfully inserted";
}

else{
    (mysqli_error($conn));
}

?> 