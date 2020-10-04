<?php

session_start();
if(!isset($_SESSION['username']))
{
header('location:Home.php');


}



?>

<html>
<head><title>welcome to home</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
a{
text-decoration:none;
color:white;
}

</style>


</head>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
<h1 class="text-center text-primary">STUDENT MANAGEMENT SYSTEM</h1>
    <h1 class="text-center">Welcome <?php echo $_SESSION['username']; ?> </h1>
<a href="logout.php"><button class="btn btn-warning float-right">logout</button></a>
<a href="show.php"><button class="btn btn-info float-left">show data</button></a>

  </div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-10">
<div class="card text-center">
  <div class="card-header text-primary font-weight-bold">Incert Student Details</div>
  <div class="card-body text-info">Want To Add Your Details</div>
  <div class="card-footer">
	<a href="add.php"><button class="btn btn-success">Click it</button></a>

   </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-10">
<div class="card text-center">
  <div class="card-header text-primary font-weight-bold">Update Student Details</div>
  <div class="card-body text-info">Want To update Your Details</div>
  <div class="card-footer">
	<a href="update.php"><button class="btn btn-success">Click it</button></a>

   </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-10">
<div class="card text-center">
  <div class="card-header text-primary font-weight-bold">Delete Student Details</div>
  <div class="card-body text-info">Want To delete Your Details</div>
  <div class="card-footer">
	<a href="delete.php"><button class="btn btn-success">Click it</button></a>

   </div>
</div>
</div>
</div>
</div>

</body>

</html>