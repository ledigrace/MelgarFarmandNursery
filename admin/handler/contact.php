<?php
include ("partials/connect.php");

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql= INSERT INTO VALUES `contact` (`name`, `phone`, `email`, `message`) VALUES ('$name', '$phone', '$email', '$message');

$connect->query($sql);
?>