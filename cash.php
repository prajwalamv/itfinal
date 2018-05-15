<?php

include 'connection.php';
session_start();
$id=$_POST['orderid'];
$email=$_SESSION['email'];
$quantity=$_POST['quantity'];
$address=$_POST['address'];
$total=$_POST['total'];





$query="INSERT INTO orders(email,orderid,quantity,totalprice,address)VALUES('$email','$id','$quantity','$total','$address')";
$run=mysqli_query($connection,$query) or die('Error'.mysqli_error($connection));


?>