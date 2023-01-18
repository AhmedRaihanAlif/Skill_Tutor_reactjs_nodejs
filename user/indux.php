<?php
require_once("dbconnect.php");
$connect = mysqli_connect( HOST, USER, PASS, DB )
    or die("Can not connect");
    
    if(!$connect){
      die("Not Connected" .mysqli_error());
    } 
 
?>
<!doctype html>
<html>
  <head>
    <title>Upload and Store video to MySQL Database with PHP</title>
  </head>
  <body>
    <div>
 
     <?php

     $fetchVideos = mysqli_query($connect, "SELECT * FROM videos ORDER BY id DESC");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['name'];
       
       echo "<div style='float: left; margin-right: 5px;'>
          <video src='".$location."' controls width='320px' height='320px' ></video>     
          <br>
         
       </div>";
     }

     ?>
 
    </div>

  </body>
</html>