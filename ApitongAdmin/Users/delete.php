<?php
$connect = mysqli_connect("localhost", "root", "", "productdb");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM order_table WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
