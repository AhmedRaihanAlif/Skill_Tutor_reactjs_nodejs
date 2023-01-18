<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search List</title>
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
		<h1 class="headers" style="margin-left:100px;margin-top:10px;color:white;font-family: Arial;color:black;">Experts Lists</h1>


	<div class="ui text container">
		<a href="user_home.php"><button style="margin-left:620px;" class="ui green button">Home </button></a>
<?php

if(isset($_POST['submit'])){


  require_once("dbconnect.php");
      $connect = mysqli_connect( HOST, USER, PASS, DB )
          or die("Can not connect");



  $search = mysqli_real_escape_string($connect,$_REQUEST['submit']);
 


          $query="SELECT username,education,experience,location,salary
          FROM profileexperts  
          where  jobtype='$search'";
          

      $result=mysqli_query($connect,$query);


      if(!$result){
          die("Not Showed".mysqli_error($connect));
      }
      else{
          
      echo "<table class='ui table'> \n";
      echo "<thead><th>Username</th>  <th>Education</th><th>Experience</th><th>Location</th><th>Salary</th></thead> \n";

      while( $rows = mysqli_fetch_array( $result ) ) {
          extract( $rows );
          echo "<tr>";
          echo "<td> $username </td>";	
          
         // echo "<td> $jobtype</td>";
      
      
          echo "<td> $education </td>";
          echo "<td> $experience</td>";
          echo "<td> $location</td>";
          echo "<td> $salary</td>";
  
  
          echo "</tr> \n";
      }

      echo "</table> \n";
      }
      
      }
?>
</div>
</div>
</body>
</html>	
			
		
		
	
    

