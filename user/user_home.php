<?php

session_start();
require '../database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learners Home</title>
 
    <link rel="stylesheet" href="../css/stylesheet.css" >     <!-- image -->
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/w3.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background-color:#CCFFE5 ;">

 
<!--Start Nav Bar -->
<?php 
  include 'nav.php';
?>
<!--End Nav Bar -->
  





<div style="margin-top:200px;">
    <center>

    <h2 style="color:red;" class="user1">Search Skills</h2>
    <form action="user_search2.php" method="post">
    <input style="margin-left:20px" class="srch" type="search" name="input" placeholder="Type To text">
               <button type="submit" name="submit" class ="btn btn-info">Search</button></a> 
            
    </form> 
    </center>
    </div>

   


<div>
<center>
<H1 style="font-size:50px; color:green">
  A best place to find your Experts<br>


  <h3 style="color:green" >"Learn skill quietly,</h3>
 <h3 style="color:green" >Speard skill frequently"</h3>
</H1>
</center>
</div>














  <div  >
    <center>
    
    <h2 style="color:blue;margin-top:50px;margin-bottom:20px;">Categories</h2>
    <div class="foo">

  
<?php 
    require_once("dbconnect.php");
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");
      
      $categorysql="SELECT username,jobtype,education,experience,location,salary
      FROM profileexperts";
      $categorysqlresult = mysqli_query($connect,$categorysql);
      while($category_row = mysqli_fetch_array($categorysqlresult)){
     
        extract( $category_row );
        $jobtype=$category_row['jobtype'];

        // if(isset($_POST['jobtype'])){
        //   $_POST['jobtype'];
         
        // }

    ?>
    
    
    <p>
  
            <button  style="color:blue;font-size:20px;">
        
            <a style="color:brown; text-decoration: none;" href="user_search.php?jobtype=<?php echo $jobtype?>"><?php echo $jobtype ?></a>
            </button>
       
    
   
  
  </p>
    <?php 
  }
  ?>
    </div>
    <center>
  </div>
  <br>
  <!-- <div class="column" >
    <h2>Quick Links</h2>
    <p><a class="link" href="user_search.php?deadline=next24hours"> &#8594 Deadline next 24 Hours</a></p>
    <p><a class="link" href="user_search.php?parttime=Part Time"> &#8594 Part Time Jobs</a></p>
    <p><a class="link" href="user_search.php?workformhome=Work From Home">&#8594 Work From Home</a></p>
  </div> -->
  

  
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>