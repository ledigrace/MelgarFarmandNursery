<?php
include ("partials/connect.php");

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql=  "INSERT INTO contact VALUES ('$name', '$phone', '$email', '$message')";

$connect->query($sql);
$connect->close();
?>