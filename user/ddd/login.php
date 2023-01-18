<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: myprofile.php");
}

if (isset($_POST['submit'])) {
	$studentId = $_POST['studentId'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE id='$studentId' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	echo "<script>alert('Successfully Login.'); window.location='myprofile.php'; </script>";
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: myprofile.php");
		echo "<script>alert('Successfully Login.'); window.location='myprofile.php'; </script>";
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/login_register.css">

	<title>UIU bookstore</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="studentId" placeholder="Your ID" name="studentId" value="<?php echo $studentId; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>