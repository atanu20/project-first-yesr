<?php
    session_start();
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
//here if(isset($_GET['token'])) should be use but token problem.
if(isset($_GET['token']))
{
    $token=$_GET['token'];
    $updatequery="UPDATE `atanu` SET  status='active' WHERE token='$token' ";

    $query=mysqli_query($con,$updatequery);

    if($query){
         if(isset($_SESSION['mes']))
                        {
                            $_SESSION['mes']="Account updated successfully";
                            header('location:Home.php');
                        }
                        else{
                            $_SESSION['mes']="YOU are logged out";
                            header('location:Home.php');

                        }

    }
    else{
        
          $_SESSION['mes']="Account not  updated";
            header('location:register.php');

         

    }



}

?>