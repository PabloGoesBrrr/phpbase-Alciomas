<?php
include 'connect.php';

$id = $_GET['id_city'];

$sq="delete from city where id_city=$id";
mysqli_query($con,$sq);
header('location:viewall_city.php');
?>