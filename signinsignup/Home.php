

<?php
session_start();
if(isset($_SESSION['username']))
{
header('location:show.php');

}


?>



<html>
<head><title>login</title>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
body{
background:#111;
margin:0px;
padding:0px;
}
.box{
box-shadow:5px 5px 5px  black;
width:300px;
padding:50px;
position:absolute;
top:40%;
left:47%;

margin:-150px;
transfrom:translate(-50%,-50%);
text-align:center;
background:#191919;

}
.box input[type="text"],.box input[type="password"]{

border:0;
display:block;
margin:20px auto;
text-align:center;
border:2px solid #3498db;
background:none;
padding:15px;
width:200px;
outline:none;
color:red;
border-radius:25px;
transition:0.25s;

}
.box h1{

color:white;
text-transform:uppercase;


}
.box input[type="text"]:focus,.box input[type="password"]:focus{

width:250px;
border-color:#2ecc71;


}
.box input[type="submit"]
{

border:0;
padding:5px 25px;
color:white;
font-size:20px;
border-radius:15px;
background:none;
border:2px solid #2ecc71 ;
cursor:pointer;
font-weight:bold;
outline:none;
transition:0.50s;
}
.box input[type="submit"]:hover{

background:#2ecc70;
}
a{
text-decoration:none;
color:red;
}
i{
color:lime;
padding-right:5px;
}
.nav{
color:blue;
font-size:25px;
font-weight:bold;
text-align:center;

}

</style></head>

<body><br><br>
<h1 class="nav">STUDENT MANAGEMENT SYSTEM</h1>
<form  class="box" action="valid.php" method="post" onsubmit="return valiadtion()">

<h1><i class="fa fa-user-circle-o fa-x"></i>login</h1>
<input type="text" name="user" placeholder="Enter Your Name" autocomplete="off" required>
<input type="password" name="pass" placeholder="Enter Your Password" autocomplete="off" required>

<input type="submit" name="submit" value="login">


<h3><a href="register.php">go to Register page</a></h3>

</form>




</body>

</html>