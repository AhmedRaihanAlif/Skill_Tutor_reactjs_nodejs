

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Buy Package </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylesheet.css" >     <!-- image -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/w3.css">
</head>
<body class="w3-pale-yellow">
<?php 
  
    include 'user_navbar.php';
    
  

      require_once("dbconnect.php");
      $connect = mysqli_connect( HOST, USER, PASS, DB )
          or die("Can not connect");
          
          if(!$connect){
            die("Not Connected" .mysqli_error());
          } 
       
    
    $sql= "SELECT name,price FROM package";
    $result= mysqli_query($connect, $sql);
?>

<br>
     <div class="container">
    <h4 style="text-align: center">Buy Package</h4>
    <br>
    <table class="w3-table-all w3-card-4 w3-centered w3-large">
      <tr class="w3-green">
        
        <th>Name</th>
      
        <th>Price</th>
        <th>Action</th>
      </tr>
      <?php 
      while ($rows = mysqli_fetch_assoc($result))
      
      { 
        ?>
      <tr class="w3-light-blue w3-hover-blue-gray">
        <td> <?php echo $rows['name'] ?></td>
    
        <td> <?php echo $rows['price'] ?></td>
        
        <td>
          <a  href="package_checkout.php?name=<?php echo $rows['name'] ?>">Buy</a>
        </td>
      </tr>
      <?php }
      ?>
    </table>
  </div>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>