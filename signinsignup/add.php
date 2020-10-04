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
<a href="main.php"><button class="btn btn-info float-left">Back to Admin</button></a>
  </div>
</div>
<div class="container w-25 m-auto">
<form action="add.php" method="post" enctype="multipart/form-data" class="was-validated">
    <div class="form-group">
      <label>Roll No:</label>
      <input type="text" class="form-control"  placeholder="Enter Rollno" name="Rollno" required>
      
    </div>
<div class="form-group">
      <label>Username:</label>
      <input type="text" class="form-control"  placeholder="Enter username" name="Name" required>
      
    </div>
<div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control"  placeholder="Enter Email" name="Email" required>
      
    </div>
<div class="form-group">
      <label>City:</label>
      <input type="text" class="form-control"  placeholder="Enter City" name="City" required>
      
    </div>
<div class="form-group">
      <label>Number:</label>
      <input type="text" class="form-control"  placeholder="Enter Number" name="Number" required>
      
    </div>
<div class="form-group">
      <label>Standerd:</label>
      <input type="number" class="form-control"  placeholder="Enter standerd" name="Standerd" required>
      
    </div>
<div class="form-group">
      <label>image:</label>
      <input type="file"  name="Image" required>
      
    </div>

    
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on it.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


</body>

</html>

<?php

if(isset($_POST['submit']))
{
$con=mysqli_connect('localhost','root');
if($con){
echo"";

}
else{
echo"not connect";

}
mysqli_select_db($con,'logpage');

$Rollno=$_POST['Rollno'];
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$City=$_POST['City'];
$Number=$_POST['Number'];
$Standerd=$_POST['Standerd'];
$Image=$_FILES['Image']['name'];
$temp=$_FILES['Image']['tmp_name'];


move_uploaded_file($temp,"dataimage/$Image");

$q="select * from login where (Name='$Name' && Email='$Email') && (Rollno='$Rollno')";

   $result=mysqli_query($con,$q);

	$num=mysqli_num_rows($result);

if($num == 1)
{
?>

<script>
alert('data already present in database');
window.open('add.php','_self');
</script>

<?php
}
else{




$qy="INSERT INTO `login`(`Rollno`, `Name`, `Email`, `City`, `Number`, `Standerd`,`Image`) 
VALUES ('$Rollno','$Name','$Email','$City','$Number','$Standerd','$Image')";

mysqli_query($con,$qy);

?>
<script>
alert('data insert successfully');
window.open('add.php','_self');
</script>
<?php
}



}




?>


