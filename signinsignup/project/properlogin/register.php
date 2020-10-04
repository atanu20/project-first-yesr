<?php
session_start();


?>




<html>
<head><title>Register</title>
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
top:35%;
left:47%;

margin:-150px;
transfrom:translate(-50%,-50%);
text-align:center;
background:#191919;

}
.box input[type="text"],.box input[type="email"],.box input[type="password"]{

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
.box input[type="text"]:focus,.box input[type="password"]:focus,.box input[type="email"]:focus{

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
color:red;
font-size:25px;
font-weight:bold;
text-align:center;

}

</style></head>

<body>
<br><br>
<?php

$con=mysqli_connect('localhost','root','','properlogin');
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

if(isset($_POST['submit']))
{
    $name =  mysqli_real_escape_string($con,$_POST['name']);
    $email =  mysqli_real_escape_string($con,$_POST['email']);
    $password =  mysqli_real_escape_string($con,$_POST['password']);
    $cpassword =  mysqli_real_escape_string($con,$_POST['cpassword']);

    $pass=password_hash($password,PASSWORD_BCRYPT);
    $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
    $ass="qwertyuioplkjhgfdsazxcvbnm1236547890~!@#$%&^*?/[]{}";
    $token=bin2hex($ass);
    //$token=str_shuffle($ass);
    //echo $token;
    //$token=rand(100000000000,10000000000000000000000);
    

    $emailquery="select * from atanu where email='$email' ";
    $query=mysqli_query($con,$emailquery);
    $num=mysqli_num_rows($query);

    if($num>0)
    {
        ?>
        <script>
        alert("email already exist");
        </script>
<?php

    }
    else{

        if($password===$cpassword)
        {
            $incertquery="INSERT INTO  atanu( name,email,password,cpassword,token,status) VALUES ('$name','$email','$pass','$cpass','$token','inactive')";
            $passquery=mysqli_query($con,$incertquery);

                                    if($passquery){
                                                          
                                            $subject=" email activation";
                                            $body="hii $name ,click here to activate account http://localhost/signinsignup/project/properlogin/active.php?send= $token";
                                            $headers="From:atanuj383@gmail.com";



                                            if(mail( $email,$subject,$body,$headers))
                                            {
                                                $_SESSION['mes']="check mail to active login $email";
                                            //     header('location:Home.php');
                                            // }
                                            }
                                            else{

                                                echo"no send";
                                            }
                                // header('location:Home.php');
                                    }
                                else
                                {?>
                                <script>
                                        alert(" no insert ");
                                        </script>
                                <?php
                                

                                    }

        }
        else{

            ?>
        <script>
        alert("password are not match");
        </script>
      <?php
        }

    }



}






?>



<h1 class="nav">STUDENT MANAGEMENT SYSTEM</h1>
<form  class="box" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" >
<h1><i class="fa fa-user-plus"></i>REGISTER</h1>
<input type="text" name="name" placeholder="Enter Your Name" autocomplete="off" required>
<input type="email" name="email" placeholder="Enter Your Email" autocomplete="off" required>
<input type="password" name="password" placeholder="Enter Your Password" autocomplete="off" required>
<input type="password" name="cpassword" placeholder="confirm Password" autocomplete="off" required>
<input type="submit" name="submit" value="Submit">


<h3><a href="Home.php">go to login page</a></h3>

</form>




</body>

</html>