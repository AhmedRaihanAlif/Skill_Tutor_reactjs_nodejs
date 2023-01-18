

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylesheet.css" >     <!-- image -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/w3.css">
</head>
<body class="w3-pale-yellow">

<?php
// navbar
    include 'user_navbar.php';

    

?>
<?php
require_once("dbconnect.php");
$connect = mysqli_connect( HOST, USER, PASS, DB )
    or die("Can not connect");
    
    if(!$connect){
      die("Not Connected" .mysqli_error());
    } 
 

if(isset($_POST['upload'])){
      
//   $name=$_FILES['file'];
//   print_r($name);
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $temp_name = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_des = "upload/" .$file_name;
        if(move_uploaded_file($temp_name,$file_des)){

            $query = "INSERT INTO videos(name) VALUES('$file_name')";
            if( mysqli_query($connect,$query)){
                $success = "Upload successfully.";
            }
            else{
                $failed = "Something Wrong";
            }
            
        }
 
    }  
?>


<br><br>

<div  style="width:800px; margin:0 auto; ">

<form action="" method="post" enctype="multipart/form-data">
<input id="file-input" type="file" name ="file">

<!-- <video id="video" width="300" height="300" name="file "controls></video><br> -->
<input  type="submit" name='upload' value="Upload">

</form>
</div>

<script src="index.js"></script>
</body>
<script>
// alert("ahad");
// document.write("ahad");
// console.log("ahad");
</script>



</body>
</html>

