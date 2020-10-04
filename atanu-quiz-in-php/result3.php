
<?php
session_start();
if(!isset($_SESSION['name']))
{
header('location:login.php');

}


?>

<!DOCTYPE html>

<html>

<head>
	<meta charset=UTF-8" />
	
	<title>PHP Quiz</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	
	
</head>

<body>
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

<br><br><br><br>
    <div class="container">
    <div class="col-lg-8 m-auto d-block text-center">
                <div class="card">
                        <div class="card-header"><h3 class="text-primary font-weight-bold">QUIZ RESULT</h3></div>
                        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            
            
            ?>

                        <div class="card-body text-center text-success">
                        <?php
echo "<h4>$totalCorrect / 5 correct</h4>";
if($totalCorrect>=4){
echo"<br><a href='tcs.pdf' class='btn btn-primary'>Certificate</a>";

}

       ?>
                        
                         </div>
                        
            </div>
    
    
    </div>
    
    
    </div>
<br><br>

<?php
$con=mysqli_connect('localhost','root','','atanuquiz');
if($con){
    ?>
    <script>
    alert("connect succesfully");
    </script>
<?php
}
else
{?>
<script>
    alert(" no connection ");
    </script>
<?php

}
    $name=$_SESSION['name'];
    $email=$_SESSION['email'];
    $insetq="INSERT INTO `result`( `name`, `email`, `sub`,`totalque`, `correct`) VALUES ('$name','$email','CSS','5','$totalCorrect')";

    $querya=mysqli_query($con,$insetq);




?>

</body>

</html>