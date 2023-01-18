
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/w3.css">
</head>
<body style="background-color:#CCFFE5 ;">
 
<!--Start Nav Bar -->
<?php 
//    include 'nav.php';
?> 
<?php

		// require_once("dbconnect.php");
		// $connect = mysqli_connect( HOST, USER, PASS, DB )
		// 	or die("Can not connect");
         $jobtypes=$_GET['username'];
         echo $jobtypes;
    //   if(!$connect){
    //     die("Not Connected" .mysqli_error());
    //   } 
//       if( isset($_REQUEST['username'])){
//          $rcv=$_REQUEST['username'];
//          //echo $rcv;
//         //   $jobtypes=$_GET['username'];
//         //   echo $jobtypes;

//        $query ="SELECT username,jobtype,education,experience,location,salary,email,mobile
//        FROM profileexperts 
//        where  username='$rcv'";
       

//    $results=mysqli_query($connect,$query);
//        }

      
    //    $jobtypes=$_GET['username'];
    //    $rr=$jobtypes;
    //    echo $jobtypes;

    ?>


<?php
if(isset($_POST['submit'])){


  require_once("dbconnect.php");
      $connect = mysqli_connect( HOST, USER, PASS, DB )
          or die("Can not connect");

          
        
  $username =mysqli_real_escape_string($connect,$_REQUEST["name"]);
  $email = mysqli_real_escape_string($connect,$_REQUEST["email"]);
  $mobile = mysqli_real_escape_string($connect,$_REQUEST["mobile"]);
  $comment = mysqli_real_escape_string($connect,$_REQUEST["comment"]);
  $expertsname = mysqli_real_escape_string($connect,$_REQUEST["expertsname"]);
 
          $query="INSERT INTO `contactus` (`id`, `name`,`email`,`mobile`,`comments`,`expertsname`) VALUES (NULL, '$username','$email','$mobile','$comment','$expertsname');";

      $result=mysqli_query($connect,$query);

      if(!$result){
          die("Not Inserted".mysqli_error($connect));
      }
      else{
          header("location:contactus2.php?Inserted");
      }
      }
    
    
?>

<?php

require_once('dbconnect.php');
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

            if(!$connect){
                die("Not Connected" .mysqli_error());
              }  
              $jobtypes=$_GET['username'];
              
              $query="SELECT username
              FROM profileexperts 
              where  username='$jobtypes'";
              $results=mysqli_query($connect,$query);



              while( $rows = mysqli_fetch_array( $results ) ) {
				
                ?>
	


 
    <br><br>
    <center>
    <div style="width:80%;margin-top:120px;" class="container w3-panel w3-card-4 w3-green ">
             <h2>Contact with <?php echo"$jobtypes" ?></h2> 
            <hr>
            <form action="contactus.php" method="post" >
                <div class="form-group"  >
                    <!--<label for="name"> Name : </label>-->
                    <input style="width:60%;height:50px;" required type="text" class="form-control" name="name" placeholder="Name">
                    
                </div>
                <br>
                <div class="form-group" >
                    <!--<label for="email">Email : </label>-->
                    <input style="width:60%;height:50px;" required type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <br>
                <div class="form-group">
                    <!--<label for="Mobile">Mobile: </label>-->
                    <input style="width:60%;height:50px;" required type="text" maxlenth="14" class="form-control" name="expertsname" value="<?php echo $rows['username'] ?>" >
                </div>
                <br>
                <div class="form-group">
                    <!--<label for="Mobile">Mobile: </label>-->
                    <input style="width:60%;height:50px;" required type="text" maxlenth="14" class="form-control" name="mobile" placeholder="Mobile">
                </div>
                <br>
                
                <div class="form-group">
                    <!--<label for="Comment"> Comment : </label>-->
                    <textarea style="width:60%;height:80px;" class="form-control" name="comment" placeholder="Write something.." style="height:150px"></textarea>
                </div>
                <br>
                <input style="margin-left:0px;margin-top:30px;" class="ui big right floated blue button" type="submit" name="submit" >
                <br><br>
            </form>
          

            </div>
        </div>
    </div>
    </center>
          
    <?php
			}
        
        
        
?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>