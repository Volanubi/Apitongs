<?php
$connect = mysqli_connect("localhost", "root", "", "admin_login");
if(isset($_POST["fullname"], $_POST["username"], $_POST["password"]))
{
 $fullname = mysqli_real_escape_string($connect, $_POST["fullname"]);
 $username = mysqli_real_escape_string($connect, $_POST["username"]);
 $password = mysqli_real_escape_string($connect, $_POST["password"]);
 $query = "INSERT INTO admin(fullname, username, password) VALUES('$fullname', '$username', '$password')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
