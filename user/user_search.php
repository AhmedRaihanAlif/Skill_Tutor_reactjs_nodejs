<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Experts List</title>
	<link  rel="stylesheet" href="stylelab.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet">
</head>
<body style="background-color:#CCFFE5 ;">
 <style>
		tr:nth-child(even) {
  background-color: #f2f2f2;
}


.header {
  background-color: ;
  color: #ffffff;
  padding: 15px;
  margin-bottom:10px;
}

.footer {
  background-color: green;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
  padding-right:130px;
  padding-top:10px;
}
.main{
    width: 100%;
   /* background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(bg.jpeg); */
    background-position: center;
    background-size: cover;
    height: 100vh;
}
.navbar{
    width: 1500px;
    height: 90px;
    margin: auto;

}

    
</style>
<div class="main">
<div class="header">
 
</div>
<div class="navbar">
		<h1 class="headers" style="margin-left:100px;margin-top:10px;color:white;font-family: Arial;color:black;">Expert Lists</h1>


	<div class="ui text container">
		<a href="user_home.php"><button style="margin-left:620px;" class="ui green button"> Home </button></a>
<?php




  require_once("dbconnect.php");
      $connect = mysqli_connect( HOST, USER, PASS, DB )
          or die("Can not connect");
          
          if(!$connect){
            die("Not Connected" .mysqli_error());
          } 
      
          if( isset($_REQUEST['jobtype'])){
           // $rcv=$_REQUEST['jobtype'];
           
            $jobtypes=$_GET['jobtype'];
            echo $jobtypes;

          $query ="SELECT username,education,experience,location,salary
          FROM profileexperts 
          where  jobtype='$jobtypes'";
          

      $results=mysqli_query($connect,$query);
      
      if(isset($_POST['username'])){
       $_POST['username'];
       
      }
          }


     
          
      echo "<table class='ui table'> \n";
      echo "<thead><th>Username</th> <th>Education</th><th>Experience</th><th>Location</th><th>Salary</th></thead> \n";
    
      while( $rows = mysqli_fetch_array( $results ) ) {
          extract( $rows );
          $username=$rows['username'];
         // $jobtype=$rows['jobtype'];
          $education=$rows['education'];
          $experience=$rows['experience'];
          $location=$rows['location'];
          $salary=$rows['salary'];
          ?>
      
          <tr>
          
          <td> <?php echo $username?> </td>
          <td> <?php echo $education?> </td>
          <td><?php echo $experience?></td>
          <td> <?php echo $location?></td>
          <td> <?php echo $salary?></td>

          <td> <a href="user_profile.php?username=<?php echo $username ?>">Profile</a></td>
          </tr> 
   

      </table> 
      <?php
      }
    
      
      
?>
</div>
</div>
</body>
</html>	
			
		
		
	
    

