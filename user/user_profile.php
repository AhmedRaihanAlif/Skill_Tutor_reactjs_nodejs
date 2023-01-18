
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylesheet.css" >     <!-- image -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
         
      .comment {
        width:80%;
        height: 90px;
        padding: 10px;
        border-left: 6px solid #095484;
        background-color: #CCFFE5;
        font: 1.4em/1.6em cursive;
        color: #095484;
      }
      .fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}
  
    </style>
</head>
<body class=" w3-pale-yellow">

<?php
// navbar
    include 'user_navbar.php';
    // $userid=$_SESSION['userid'];
    // $sql="SELECT * from user where id='$userid' ";
    // $result=mysqli_query($connection,$sql);
    // $row=mysqli_fetch_assoc($result);
    // $image = '../images/'.$row['image'];
?>
<?php
		require_once("dbconnect.php");
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

      if(!$connect){
        die("Not Connected" .mysqli_error());
      } 
      if( isset($_REQUEST['username'])){
         $rcv=$_REQUEST['username'];
        echo $rcv;
        //  $jobtypes=$_GET['jobtype'];
        //  echo $jobtypes;

       $query ="SELECT username,jobtype,education,experience,location,salary,email,mobile
       FROM profileexperts 
       where  username='$rcv'";
       

   $results=mysqli_query($connect,$query);
       }

		// $results = mysqli_query( $connect, "SELECT username,jobtype,education,experience,location,salary,email,mobile FROM `profileexperts` where username ='$nam' " )
		// 	or die("Can not execute query");
	?>
  <?php

if(isset($_POST['submit'])){
 
  
  require_once("dbconnect.php");
      $connect = mysqli_connect( HOST, USER, PASS, DB )
          or die("Can not connect");
          if(!$connect){
            die("Not Connected" .mysqli_error());
          } 

  $feedback =mysqli_real_escape_string($connect,$_REQUEST["feedback"]);
 

          $query="update profileexperts set feedback ='$feedback' where username='$rcv';";

      $result=mysqli_query($connect,$query);

      if(!$result){
          die("Not Inserted".mysqli_error($connect));
      }
      else{
          header("location:uploadcv.php?Inserted");
      }
      }
?>

<div class="container rounded bg-white mt-5 mb-5 w3-card-4 w3-light-blue">
<h3 class="w3-center">User Profile</h3>
    <div class="row">
        <div class="col-md-3 border-right">
        <div class="card" style=margin-top:30%>
        <?php
    while( $rows = mysqli_fetch_array( $results ) ) {
        extract( $rows );
        ?>
  <!-- <img src="jobseeker.jpg" alt="John" style="width:100%"> -->
  <h1><?php echo  $rows['username'] ?></h1>
  <p class="title">Student</p>
  <p>United International University</p>


 
<form action="comment.php">
  <p style="margin-left:20%;"><button>
  <a href="comment.php?username=<?php echo $username ?>">Watch Message</a>
  </button></p>
  </form>
</div> 

<p style="margin-top:20%;margin-left:10%;">
<form action="contactus.php">
<button style="margin-left:10%;">
<a href="contactus.php?username=<?php echo $username ?>">Contact Pls</a>
</button></p>
</form>
<div style="margin:;">
  <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a> 
  </div>
        </div>

        
   

        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="row mt-2">
                   
                <div class="rows mt-3">
                    <div class="col-md-12"><label class="labels">Job Type</label><input  type="text" class="form-control" name="jobtype" value="<?= $rows['jobtype']?>"></div>
                    <div class="col-md-12"><label class="labels">Education</label><input  type="text" class="form-control"   name="education" value="<?= $rows['education']?>"></div>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input  type="email" class="form-control" name="experience" value="<?= $rows['mobile']?>"></div>
                    <div class="col-md-12"><label class="labels">Location</label><input  type="text" class="form-control" name="location"  value="<?= $rows['location']?>"></div>

                    <form action="comment.php">
  <p style="margin-left:40%;margin-top:20%;"><button>
  <a href="feedback.php?username=<?php echo $username ?>">Watch Feedback</a>
  </button></p>
  </form>
                </div>
                </div>
                
 
                <!-- <div class="mt-5 input-center"><a class="btn btn-primary" href=user_profileedit.php?profileupdate=profileupdate"> Profile</a></div> -->
                 </div>
        </div>
       
        <div class="col-md-4">    
            <div class="p-3 py-5">
                <div class="rows mt-3">
                <div class="col-md-12"><label class="labels">Email </label><input  type="text" class="form-control"  name="experiences" value="<?= $rows['email']?>"></div> <br>
                <div class="col-md-12"><label class="labels">Salary</label><input  type="text" class="form-control"  name="salary" value="<?= $rows['salary']?>"></div>
               
                <div>
                    <h4 style ="margin-top:20%;margin-left:20px;">Give Feedback</h4>
                <form style ="margin-top:20px;margin-left:20px;"action="#" method="post" >
      <textarea class="comment" name="feedback"></textarea>
      <br>
      <input type="submit" name="submit" value="Send">
    </form>
                </div>
            </div>
        </div>
    </form>
    </div>
    <?php
    }
    ?>
</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

