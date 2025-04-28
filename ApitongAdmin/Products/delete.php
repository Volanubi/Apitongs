<?php
$connect = mysqli_connect("localhost", "root", "", "productdb");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM tbl_product WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
