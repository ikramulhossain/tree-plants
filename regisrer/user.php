<?php
include("connection.php");

$Fistname=$_POST['Fistname'];
$lastname=$_POST['lastname'];
$Phonenumber=$_POST['Phonenumber'];
$EmailId=$_POST['EmailId'];
$Password=$_POST['Password'];
$Gender=$_POST['Gender'];
$connection = mysqli_connect ($db_connection,"INSERT INTO user(Fistname,lastname,Phonenumber,EmailId,Password,Gender) VALUES('$Fistname'
,'$lastname','$Phonenumber','$EmailId','$Password','$Gender')") or die (mysqli_error('connection'));
mysqli_close($connection);
header("location:home.php?note=success");
?>