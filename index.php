<?php
include "db.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Dashboard</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
 <div class="container-fluid">
   <div class="navbar-header">
     <a class="navbar-brand" href="./">ToDo</a>
   </div>
   <ul class="nav navbar-nav">
     <li class="active"><a href="./">Home</a></li>
     <li><a href="add.php">Add</a></li>
   </ul>
 </div>
</nav>

<div class="container">
    <table class="table table-striped">
   <thead>
     <tr>
       <th>name</th>
       <th>start at</th>
       <th>stop at</th>
       <th>location</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td>Piyush</td>
       <td>2019-01-23</td>
       <td>2019-01-31</td>
       <td>SHUATS</td>
     </tr>
      <tr>
       <td>Shubham</td>
       <td>2019-01-14</td>
       <td>2019-01-28</td>
       <td>SHUATS</td>
     </tr>


    <?php
    //$arr=ARRAY("name"=>"piyush","location"=>"Allahabad","type"=>"Trainee","Age"=>26);
    //print_r($conn);
    
    //foreach($arr as $key=>$value){
        //echo "$key:$value";
        //echo "<br>";
        $sql="SELECT * FROM tasks";
        $query= mysqli_query($conn,$sql);
        //print_r($query);
        if(mysqli_num_rows($query)==0){
            echo "no rows in the table";
        }
        else{
            
        while($row=mysqli_fetch_assoc($query)){
            print_r($row);
            echo "<tr>";
            
                echo"<td>".$row["name"]."</td>";
                echo"<td>".$row["starttime"]."</td>";
                echo"<td>".$row["stoptime"]."</td>";
                echo"<td>".$row["location"]."</td>";
                echo "<td><a href='delete.php?taskid=".$row["taskid"]."'>Delete</a></td>";
        }
        }
    //}
    ?>
    </tbody>
    </table>
    </div>

</body>
</html>