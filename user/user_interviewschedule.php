

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview Schedule</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylesheet.css" >     <!-- image -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/w3.css">
</head>
<body style=" background-color: #CCFFE5;">

<?php
// navbar
    include 'user_navbar.php';



?>
<?php
		require_once("dbconnect.php");
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");


		$results = mysqli_query( $connect, "SELECT p.username,i.meetingid,i.meetingpass,i.meetingtime,i.meetinglink FROM interviewupload i JOIN profileexperts p ON i.id=p.id; " )
			or die("Can not execute query");
	?>

<br><br>
<div class="w3-container">
    <h4 class="w3-center" style="font-size:30px;color:Blue">Interview Schedule View</h4>
    <br>
    <table class="w3-table-all w3-card-4 w3-centered">
      <tr class="w3-blue">
        
        <th>Expert's Name</th>
        <th>Meeting ID</th>
        <th>Password</th>
        <th>Meeting Time</th>
        <th>Meeting Link</th>
        
      </tr>
    


      <?php
    while( $row = mysqli_fetch_array( $results ) ) {
        extract( $row );
        ?>
      <tr class=" w3-light-red w3-hover-blue-gray">
         <td> <?php echo $row['username'] ?>
       
     
       
        <td> <?php echo $row['meetingid'] ?></td>
        <td> <?php echo $row['meetingpass'] ?></td>
        <td> <?php echo $row['meetingtime'] ?></td>
    
        <td> <a class ="btn btn-warning" href="<?php echo $row['meetinglink'] ?>" target="_blank">Join Meeting</a></td>
      </tr>
      <?php 
         }
      ?>
       </table>
  </div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

