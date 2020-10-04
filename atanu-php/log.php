<?php
$con=mysqli_connect('localhost','root');
if($con){
echo"con";

}
else{
echo"no";
} 

mysqli_select_db($con,'contact');

$user=$_POST['user'];
$password=$_POST['password'];



$query ="insert into log(user,password) 
   values('$user','$password')";
mysqli_query($con,$query);
header('location:full.php');

?>