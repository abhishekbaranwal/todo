<?php
include("db.php");

$taskid = $_GET["taskid"];

$sql ="DELETE FROM tasks WHERE taskid='$taskid'";

    
        
        
        if(mysqli_query($conn,$sql)){
            echo "deleted";
        }
        else{
            die(mysqli_error($conn));
        }
        
    
?>