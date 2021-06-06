<?php





$host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="tree plannet";
    

$db_connection =mysqli_connect ('$host','$dbusername','$dbpassword ','$dbname') or die;
if(mysqli_connect_error())
{
    echo "connection failed : " .mysqli_connect_error();
}
else
{
    
    echo "Registration Successfully.....";
    
}
?>
