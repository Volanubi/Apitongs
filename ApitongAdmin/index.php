

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="Login/main.php">

<title>Login</title>
</head>

<body>


	<div class="container">
		<form action="" method="POST" class="login-admin">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Admin Login</p>
			
<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['fullname'])) {
    header("Location: Admin/admin.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = ($_POST['password']);

	$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result = mysqli_query($link, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['fullname'] = $row['fullname'];
		header("Location: Admin/admin.php");
	} else {
		echo "<p style='color:red; top:37%; margin-left:60px; position:absolute;'>Wrong Username or Password!</p>";
	}
}
?>
			
			<div class="input-group">
				<input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
		</form>
	</div>


</body>
</html>