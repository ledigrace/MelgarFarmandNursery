<?php
include("../partials/connect.php");

$name=$_POST['name'];
$price=$_POST['price'];
$description=$_POST['description'];
$category=$_POST['category'];

$target="../uploads/";
$file_path=$target.basename(path)

$sql="INSERT INTO categories(name) VALUES ('$category')";

$connect->query($sql);
?>