<!-- <?php
session_start();
require '../database.php';
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview Schedule Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylesheet.css" >     <!-- image -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/w3.css">
</head>
<body style=" background-color: #CCFFE5;" >

<?php
// navbar
    include 'user_navbar.php';
    //check already applied or not
?>

<?php
/*
$jobid=$_GET['jobid'];
$userid=$_SESSION['userid'];
$applysql="SELECT * FROM jobapply where userid='$userid' AND jobid='$jobid' ";
$applysqlresult=mysqli_query($connection,$applysql);
$apply_num=mysqli_num_rows($applysqlresult);

if($apply_num==1){
    header("Location:user_appliedjobview.php?apply_msg=Already applied for the job");
    exit();
}
*/
?> 

<?php

if(isset($_POST['submit'])){


  require_once("dbconnect.php");
      $connect = mysqli_connect( HOST, USER, PASS, DB )
          or die("Can not connect");

  $meetingid =mysqli_real_escape_string($connect,$_REQUEST["meetingid"]);
  $meetingpass =mysqli_real_escape_string($connect, $_REQUEST["meetingpass"]);
  $meetingtime = mysqli_real_escape_string($connect,$_REQUEST["meetingtime"]);
  $meetinglink = mysqli_real_escape_string($connect,$_REQUEST["meetinglink"]);
  

          $query="INSERT INTO `interviewupload` (`id`, `meetingid`, `meetingpass`,`meetingtime`, `meetinglink`) VALUES (NULL,'$meetingid', '$meetingpass', '$meetingtime','$meetinglink');";

      $result=mysqli_query($connect,$query);

      if(!$result){
          die("Not Inserted".mysqli_error($connect));
      }
      else{
          header("location:user_upinterviewschedule.php?Inserted");
      }
      }
?>

<center>
<h2 class="w3-greeen w3-padding-small" style="width: 80%;font-size:30px;color:blue;"> Upload Your Interview Info </h2>

<div style="margin-top:60px;" >

<form    action="user_upinterviewschedule.php" method="post"  >
    
    
    <br>  <br>
    <label >Meeting Id</label>
    <input type="text"  name="meetingid" placeholder="Enter Your Meeting id..">
    <br>  <br>
    <label >Passward </label>
    <input type="text"  name="meetingpass" placeholder="Enter Your Meet pasward..">
    <br>  <br>
    <label >Meeting Time</label>
    <input type="datetime-local"  name="meetingtime" placeholder="Enter Your Meeting time..">      
    <br>  <br>

    <label >Meeting Link</label>
    <input type="url"  name="meetinglink" placeholder="https://example.com..">   
    <br>   <br>

 
</div>

    <br>
    
    <div style="margin-left:25%;" class="container w3-light-yellow ">
        <div  class="row">
           <div class="col-md-8 col-md-offset-3">
              
                                                                 <!-- enctype="multipart/form-data" -->
             
                    
                    <button  type="submit" name="submit"  class ="btn btn-info" >Submit</button>
                <br><br>
                
            </div>
        </div>
        </form>
    </div>
    </center>
    <!-- <?php
        // if(isset($_GET['apply_msg'])){
        //     echo $_GET['apply_msg'];
        // }
    ?> -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>