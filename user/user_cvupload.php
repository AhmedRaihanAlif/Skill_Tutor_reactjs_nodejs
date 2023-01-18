

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Upload</title>
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

if(isset($_POST['submit'])){


  require_once("dbconnect.php");
      $connect = mysqli_connect( HOST, USER, PASS, DB )
          or die("Can not connect");

  $username =mysqli_real_escape_string($connect,$_REQUEST["username"]);
  $education = mysqli_real_escape_string($connect,$_REQUEST["education"]);
  $experience =mysqli_real_escape_string($connect,$_REQUEST["experience"]);
  $location =mysqli_real_escape_string($connect, $_REQUEST["location"]);
  $salary = mysqli_real_escape_string($connect,$_REQUEST["salary"]);
  $jobtype = mysqli_real_escape_string($connect,$_REQUEST["jobtype"]);
  $email = mysqli_real_escape_string($connect,$_REQUEST["email"]);
  $mobile = mysqli_real_escape_string($connect,$_REQUEST["mobile"]);

          $query="INSERT INTO `profileexperts` (`id`, `username`,`education`, `experience`, `location`, `salary`,`jobtype`,`email`,`mobile`) VALUES (NULL, '$username', '$education', '$experience', '$location', '$salary','$jobtype','$email','$mobile');";

      $result=mysqli_query($connect,$query);

      if(!$result){
          die("Not Inserted".mysqli_error($connect));
      }
      else{
          header("location:uploadcv.php?Inserted");
      }
      }
?>
  
<center>

<div style="margin-top:60px;" >
  <form class="ui form"  action="#" method="post"   >
    <label for="fname">First Name</label>
    <input type="text"  name="username" placeholder="Your name..">
    <br>
   <br>
   
    <label for="fname">Education </label>
    <input type="text"  name="education" placeholder="Education Background">
    
    <br>  <br>
    <label for="fname">Experience  <input type="text"  name="experience" placeholder="Experience year"></label>
   
    <br>  <br>
    <label for="fname">Location <input type="text"  name="location" placeholder="Your Location"></label>
    
    <br>  <br>
    <label for="fname">Salary <input type="text"  name="salary" placeholder="Salary Expectations"></label>

    <br>  <br>
    <label for="country">Job Type <input type="text"  name="jobtype" placeholder="Your Interested Field"></label>
   
    
    <br>   <br>
    <label for="country">Email <input type="text"  name="email" placeholder="Your Email"></label>
   
    
    <br>   <br>
    <label for="country">Mobile <input type="text"  name="mobile" placeholder="Your Mobile Number"></label>
   
    
    <br>   <br>
   
    
    <input style="margin-left:0px;margin-top:30px;" class="ui big right floated blue button" type="submit" name="submit" >
                </form>
</div>

    <br>

            </div>
        </div>
    </div>
    </form>
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