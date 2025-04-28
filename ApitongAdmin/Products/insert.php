<?php
$connect = mysqli_connect("localhost", "root", "", "productdb");
if(isset($_POST["name"], $_POST["image"], $_POST["price"]))
{
 $name = mysqli_real_escape_string($connect, $_POST["name"]);
 $image = mysqli_real_escape_string($connect, $_POST["image"]);
 $price = mysqli_real_escape_string($connect, $_POST["price"]);
 $query = "INSERT INTO tbl_product(name, image, price) VALUES('$name', '$image', '$price')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
