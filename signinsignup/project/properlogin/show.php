<?php
session_start();
if(!isset($_SESSION['name']))
{
header('location:Home.php');

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>welcome <?php  echo $_SESSION['name'] ;?></h2>
    <a href="logout.php">click</a>
</body>
</html>