<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <a href="logout.php" 
      style="
        display: inline-block; 
        padding: 10px 20px; 
        background-color: rgb(125,125,235); 
        color: white; 
        text-decoration: none; 
        border-radius: 5px; 
        font-size: 16px; 
        font-weight: bold; 
        text-align: center; 
        cursor: pointer; 
        border: 0px solid #0056b3;" 
   onmouseover="this.style.backgroundColor='#0056b3'; this.style.borderColor='#004085';" 
   onmouseout="this.style.backgroundColor='rgb(125,125,235)'; this.style.borderColor='#0056b3';">Logout</a>
    </div>
</body>
</html>