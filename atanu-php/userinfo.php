<?php
$con=mysqli_connect('localhost','root');
if($con){
echo"connect";
}
else{
echo"no";
} 

mysqli_select_db($con,'contact');

$user=$_POST['user'];
$email=$_POST['email'];
$number=$_POST['number'];
$about=$_POST['about'];


$query ="insert into comment(user,email,number,about) 
   values('$user','$email','$number','$about')";
mysqli_query($con,$query);
header('location:full.php');

?>