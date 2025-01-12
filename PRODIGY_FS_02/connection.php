<?php

error_reporting(0);

$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

$conn = mysqli_connect($server_name,$username,$password,$dbname);

if($conn)
{
    //echo "Connection OK";
}
else
{
    echo "Connection failed",mysqli_connect_error();
}
?>




