

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/Registercss.php">

	<title>Register</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
<?php 

include 'config.php';

error_reporting(1);

session_start();

if (isset($_SESSION['fullname'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$password = ($_POST['password']);
	$cpassword = ($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($link, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (fullname, email, password)
					VALUES ('$fullname', '$email', '$password')";
			$result = mysqli_query($link, $sql);
			if ($result) {
				echo "<script>alert('User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				header("Location: index.php");
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
				
			}
		} else {
			echo "<p style='color:red; margin-left:95px; top:30.5%; position:absolute;'>Email Already Exists!</p>";
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
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
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
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>