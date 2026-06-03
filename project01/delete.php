<?php
include "connection.php";

$id = $_GET['id'];
mysqli_query($con, "DELETE FROM customer WHERE id_cust=$id");

header("Location: staff.php");
?>