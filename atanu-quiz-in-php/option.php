<?php
session_start();
if(!isset($_SESSION['name']))
{
header('location:login.php');

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>option</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100">


<nav class="navbar navbar-expand-lg navbar-dark  bg-dark fixed-top text-center">
<div class="container">
  <h2 class="navbar-brand">welcome <?php  echo $_SESSION['name'] ;?></h2>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a href="logout.php" class="nav-link">logout</a>
      </li>
     
      
    </ul>
    </div>
  </div>
</nav>
<br><br><br>
    <div class="container">
    
    

    <div class="card">
      <div class="card-header bg-info text-white">Choose a Topic for Exam</div>
      <div class="card-body text-center">
      
      <a href="htmll.php" class="btn btn-success mx-2">HTML</a>
      <a href="phpp.php" class="btn btn-success mx-2">PHP</a>
      <a href="csss.php" class="btn btn-success mx-2">CSS</a>
      <a href="show.php" class="btn btn-success mx-2">Web Devlopment</a>
      
      
      </div>
    </div>

    
    
    
    
    
    </div>
</body>
</html>