<?php
$Fistname=$_POST['Fistname'];
$lastname=$_POST['lastname'];
$Phonenumber=$_POST['Phonenumber'];
$EmailId=$_POST['EmailId'];
$Password=$_POST['Password'];
$Gender=$_POST['Gender'];
if (!empty($Fistname) || !empty($lastname) || !empty($Phonenumber) || !empty($EmailId) || !empty($Password) ||!empty($Gender))
{
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="tree plannet";
    

}

$connection = new mysqli ('localhost','root',' ','test1');
if($conn->connect_error)
{
    die('connection failed : ' .$conn->connect_error);
}
else
{
    $stml = $conn->prepare("insert into registrarion(Fistname, lastname, Phonenumber, EmailId, Password, Gender) 
    value(?, ?, ?, ?, ?, ?)");
    $stml->bind_param("ssisss",$Fistname,$lastname,$Phonenumber,$EmailId,$Password,$Gender);
    $stml->execute();
    echo "Registration Successfully.....";
    $stml->close();
    $conn->close();
}
?>
