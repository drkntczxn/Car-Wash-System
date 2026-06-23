<?php
include "connection.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$wash_type = $_POST['wash_type'];
$wax = $_POST['wax'];

$sql = "UPDATE customer SET
name_cust = '$name',
email_cust = '$email',
wash_type = '$wash_type',
wax = '$wax'
WHERE id_cust = $id";

mysqli_query($con, $sql);

header("Location: staff.php");
?>