<?php
session_start();
header('location:Home.php');
$con=mysqli_connect('localhost','root');
if($con){
echo"connected";

}
else{
echo"not connect";

}
mysqli_select_db($con,'logpage');
$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$q="select * from register where (user='$user' && email='$email') && (pass='$pass')";

   $result=mysqli_query($con,$q);

	$num=mysqli_num_rows($result);

if($num == 1)
{
echo"Duplicate";
}
else{

$qy="insert into register (user,email,pass) values('$user','$email','$pass')";

mysqli_query($con,$qy);



}

?>