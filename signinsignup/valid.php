<?php
session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'logpage');
$user=$_POST['user'];

$pass=$_POST['pass'];

$q="select * from register where (user='$user' && pass='$pass')";

   $result=mysqli_query($con,$q);

	$num=mysqli_num_rows($result);

if($num == 1)
{
$_SESSION['username']=$user;
header('location:show.php');

}
else{
?>

<script>
alert('password and username not match');
window.open('Home.php','_self');
</script>

<?php




}

?>