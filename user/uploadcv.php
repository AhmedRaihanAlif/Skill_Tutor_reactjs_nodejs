<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style=" background-color: #CCFFE5;">

<?php




//   require_once("dbconnect.php");
//       $connect = mysqli_connect( HOST, USER, PASS, DB )
//           or die("Can not connect");
          
//           if(!$connect){
//             die("Not Connected" .mysqli_error());
//           } 
      
//           if( isset($_REQUEST[$iname])){
//            // $rcv=$_REQUEST['jobtype'];
           
//             $jobtypes=$_GET['jobtype'];
// echo $jobtypes;

       
    
//           }    
      
?>
 <form action="user_home.php" method="post">
    <div style="margin-left:25%;" class="container w3-light-yellow ">
        <div  class="row">
           <div class="col-md-8 col-md-offset-3">
                <h2 class="w3-greeen w3-padding-small" style="width: 80%;font-size:30px;color:blue;"> Upload Your CV Here </h2>
                <hr>
                <form action="uploadcv.php" method="post" >
                    <div  class="form-group">
               
                    
                     <input class="form-control" type="file" name="cvfile" id="fileSelect">
                     <input class="form-control" type="hidden" id="jobid" name="jobid" value="<?=$jobid?>"> 
                     </div> 
                     <input style="margin-left:0px;margin-top:30px;" class="ui big right floated blue button" type="submit" name="submit" >
                 <br><br>
                </form>
</form>
              
</body>
</html>