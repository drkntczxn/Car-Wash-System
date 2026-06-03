<?php
include "connection.php";

$name = $_POST['name_cust'];
$email = $_POST['email_cust'];
$washType = $_POST['wash_type'];
$wax = $_POST['wax'];


$sql = "INSERT INTO customer (name_cust, email_cust, wash_type, wax)
VALUES ('$name', '$email','$washType','$wax')";

mysqli_query($con, $sql);



header("Location: staff.php")

?>