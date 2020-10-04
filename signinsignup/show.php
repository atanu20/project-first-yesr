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

span{

animation:anim1 2s linear infinite;
}

@keyframes anim1{

0%{

color:rgb(236, 15, 126);

}
30%{

color:lime;

}
60%{

color:rgb(243, 77, 11);

}
100%{

color:blue;

}

}
h3{

animation:anim 2s linear infinite;
}
@keyframes anim{

0%{
transform: translateX(0);
}
50%{
transform: translateX(20px);
}
100%{
transform: translateX(0);
}

}
</style>


</head>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
<h1 class="text-center text-primary font-weight-bold">STUDENT MANAGEMENT SYSTEM</h1>
    <h1 class="text-center">Welcome <?php echo $_SESSION['username']; ?> </h1>
<a href="logout.php"><button class="btn btn-warning float-right">logout</button></a>
<h4 class="text-danger">If u Want to incert ,update and delete  click it</h4> 
<a href="main.php"><button class="btn btn-info float-left">Go to Admin</button></a>

 
  </div>

 
</div>
<div class="container w-50 m-auto">
<div class="card text-center ">
  <div class="card-header"><span><h3 class="font-weight-bold">See Your Details</h3></span></div>
  
</div>
   </div>
<br><br>
<div class="container w-25 m-auto">
<form action="" method="post"  class="was-validated">
 
   
      
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control"  placeholder="Enter standerd" name="Name" required>
      
    </div>
   
<div class="form-group">
      <label>Standerd:</label>
      <input type="number" class="form-control"  placeholder="Enter standerd" name="Standerd" required>
      
    </div>

    
    
    <button type="submit" name="search" class="btn btn-primary">search</button>
  </form>

<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'logpage');
if(isset($_POST['search']))

{
$Name=$_POST['Name'];
$Standerd=$_POST['Standerd'];



$qu="SELECT * FROM `login` WHERE   Name='$Name' AND Standerd='$Standerd' ";
$run=mysqli_query($con,$qu);
while($row = mysqli_fetch_array($run))
{?>


<form action="" method="post" enctype="multipart/form-data" >
<div class="form-group">
      <input type="hidden" class="form-control"   name="id" value="<?php echo $row['id'] ; ?> " >
 </div>
<div class="form-group">
      <input type="text" class="form-control"   name="Rollno" value="<?php echo $row['Rollno'] ; ?> " >
 </div>

    
<div class="form-group">
      <input type="text" class="form-control"   name="Name" value="<?php echo $row['Name'] ; ?> " >
 </div>

     <div class="form-group">
      <input type="email" class="form-control"   name="Email" value="<?php echo $row['Email'] ; ?> " >
 </div>
 
  <div class="form-group">
      <input type="text" class="form-control"   name="City" value="<?php echo $row['City'] ; ?> " >
 </div>
  <div class="form-group">
      <input type="text" class="form-control"   name="Number" value="<?php echo $row['Number'] ; ?> " >
 </div>

   
<div class="form-group">
     <input type="number" class="form-control"  name="Standerd" value="<?php echo $row['Standerd'] ;?>">
 </div>
<div class="form-group">
     <div>
<img src="dataimage/<?php echo $row['Image'];?>" style="width:150px;height:150px;">
	</div>
 </div>

    
    
    <button type="submit" name="save" class="btn btn-success">Save</button>
  </form>



<?php
}

}




?>

</div>
<br><br>





</body>
</html>

<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'logpage');
if(isset($_POST['save']))

{

$Rollno=$_POST['Rollno'];
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$City=$_POST['City'];
$Number=$_POST['Number'];
$Standerd=$_POST['Standerd'];



$qq="UPDATE `login` SET Rollno='$_POST[Rollno]',Name='$_POST[Name]',
Email='$_POST[Email]',City='$_POST[City]',Number='$_POST[Number]',Standerd='$_POST[Standerd]' WHERE id='$_POST[id]' ";
$run=mysqli_query($con,$qq);


if($run)
{

echo' <script> alert("save successfully")</script>';

}
else{
echo' <script> alert("error in save")</script>';

}

}





?>
