<?php
$connect = mysqli_connect("localhost", "root", "", "productdb");
if(isset($_POST["order_number"], $_POST["order_total_amount"], $_POST["transaction_id"], $_POST["email_address"], $_POST["customer_name"]))
{
 $order_number = mysqli_real_escape_string($connect, $_POST["order_number"]);
 $order_total_amount = mysqli_real_escape_string($connect, $_POST["order_total_amount"]);
 $transaction_id = mysqli_real_escape_string($connect, $_POST["transaction_id"]);
 $email_address = mysqli_real_escape_string($connect, $_POST["email_address"]);
 $customer_name = mysqli_real_escape_string($connect, $_POST["customer_name"]);
 $query = "INSERT INTO order_table(order_number, order_total_amount, transaction_id, email_address, customer_name) 
 VALUES('$order_number', '$order_total_amount', '$transaction_id', '$email_address', '$customer_name')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
