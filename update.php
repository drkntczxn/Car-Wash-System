<?php
include "connection.php";

$id = $_POST['id_cust'];
$name = $_POST['name_cust'];
$email = $_POST['email_cust'];
$wash_type = $_POST['wash_type'];
$wax = $_POST['wax'];

$sql = "UPDATE customer SET
name_cust to '$name',
email_cust to '$email',
wash_type to '$wash_type',
wax to '$wax'
WHERE id_cust = $id";

mysqli_query($con, $sql);

header("Location: staff.php");
?>