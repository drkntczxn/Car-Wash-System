<?php
$con = mysqli_connect("localhost", "root", "102780", "carwash", "3306");

if(!$con){
    die("Connection error: ".mysqli_connect_error());
}
?>