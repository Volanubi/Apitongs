<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="main.php">

	<title>Register</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-admin">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
<?php 

include '../config.php';

error_reporting(1);

session_start();



if (isset($_POST['submit'])) {
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = ($_POST['password']);
	$cpassword = ($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM admin WHERE username='$username'";
		$result = mysqli_query($link, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO admin (fullname, username, password)
					VALUES ('$fullname', '$username', '$password')";
			$result = mysqli_query($link, $sql);
			if ($result) {
				echo "<script>alert('User Registration Completed.')</script>";
				$username = "";
				$username = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				header("Location: ../Admin/admin.php");
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
				
			}
		} else {
			echo "<p style='color:red; margin-left:95px; top:30.5%; position:absolute;'>Username Already Exists!</p>";
		}
		
	} else {
		echo "<p style='color:red; margin-left:85px; top:30.5%; position:absolute;'>Password Not Matched!</p>";
	}
}

?>

			<div class="input-group">
				<input type="text" placeholder="Full Name" name="fullname" value="<?php echo $fullname; ?>" required>
			</div>
			<div class="input-group">
				<input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Go Back to The Admin Page?<a href="../Admin/admin.php"> Click Here</a>.</p>
		</form>
	</div>
</body>
</html>