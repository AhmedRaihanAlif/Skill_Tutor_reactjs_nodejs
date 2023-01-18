<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<div class="container">
        <style>
            .tip {
  width: 0px;
  height: 0px;
  position: absolute;
  background: transparent;
  border: 10px solid #ccc;
}

.tip-up {
  top: -25px; /* Same as body margin top + border */
  left: 10px;
  border-right-color: transparent;
  border-left-color: transparent;
  border-top-color: transparent;
}

.tip-down {
  bottom: -25px;
  left: 10px;
  border-right-color: transparent;
  border-left-color: transparent;
  border-bottom-color: transparent;  
}

.tip-left {
  top: 10px;
  left: -25px;
  border-top-color: transparent;
  border-left-color: transparent;
  border-bottom-color: transparent;  
}

.tip-right {
  top: 10px;
  right: -25px;
  border-top-color: transparent;
  border-right-color: transparent;
  border-bottom-color: transparent;  
}

.dialogbox .body {
  position: relative;
  max-width: 300px;
  height: auto;
  margin: 20px 10px;
  padding: 5px;
  background-color: #DADADA;
  border-radius: 3px;
  border: 5px solid #ccc;
}

.body .message {
  min-height: 30px;
  border-radius: 3px;
  font-family: Arial;
  font-size: 14px;
  line-height: 1.5;
  color: #797979;
}
        </style>

    <title>Comments</title>
</head>
<body style=" background-color: #CCFFE5;">
<center>
<?php

require_once('dbconnect.php');
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

            if(!$connect){
                die("Not Connected" .mysqli_error());
              }  
              $jobtypes=$_GET['username'];
             echo "$jobtypes";
              $query="SELECT comments FROM `contactus` WHERE expertsname='$jobtypes';";
              $results=mysqli_query($connect,$query);



              while( $rows = mysqli_fetch_array( $results ) ) {
				
                ?>


<div class="dialogbox">
    <div class="body">
      <span class="tip tip-up"></span>
      <div class="form-group" >
                    <!--<label for="email">Email : </label>-->
                    <span ><?php echo $rows['comments'] ?></span>             
                     </div>
    </div>
  </div>
  
 
</center>
<?php
 }
?>
</body>
</html>