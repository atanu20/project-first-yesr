<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<style>

*{

padding: 0;margin: 0;
box-sizing: border-box;

}
.box{

border-top-left-radius:20px ;
border-bottom-left-radius: 20px;
border-top-right-radius:20px ;
border-bottom-right-radius: 20px;
padding:10px 10px;
background-color:white;
}
.first{
padding:10px  30px;
border:2px solid brown;
background:linear-gradient(to left,red,yellow,cyan);
}
i{
color:deeppink;


}
</style>
</head>

<body>
    <br><br>
    <div class="container w-75 first ">
        <div class="row">
            <div class="col-md-3  text-center pt-5">
                <i class="fa fa-rocket fa-5x animated infinite bounce" aria-hidden="true"></i>
               <h4> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h4>
               <br><br>
               <a href="main.php"><button  type="submit" class="btn btn-primary ">Go to Home</button></a>
            </div>
            
            <div class="col-md-9   my-5 box ">
                <div class="container w-100 m-auto">
                    <h2 class="text-center">Welcome to Job World</h2><br><br>
                <form action=" " method="post">
                    <div class="row">
                        <div class="col-md-6 col-10">
                            <input type="text" class="form-control"  placeholder="Enter Name" name="name" autocomplete="off" required>
                          </div>
                          <br><br>
                          <div class="col-md-6 col-10">
                            <input type="email" class="form-control"  placeholder="Enter Email" name="email" autocomplete="off" required>
                          </div> <br><br>
                          <div class="col-md-6 col-10">
                            <input type="text" class="form-control"  placeholder="Enter Qualification" name="qua" autocomplete="off" required>
                          </div> <br><br>
                          <div class="col-md-6 col-10">
                            <input type="number" class="form-control"  placeholder="Enter Phone no" name="phone" autocomplete="off" required>
                          </div> <br><br>
                          <div class="col-md-6 col-10">
                            <input type="text" class="form-control"  placeholder="Enter address" name="city" autocomplete="off" required>
                          </div> <br><br>
                          <div class="col-md-6 col-10">
                            <input type="text" class="form-control"  name="job" value="Web Devlopment">
                          </div> <br><br>
                          <div class="w-75 m-auto" >
                          <button  type="submit" name="submit" class="btn btn-outline-info mb-2 float-right">Submit</button>
                            </div>




                    </div>
                  </form>
               </div>

            </div>

        </div>


    </div>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','newatanu');
if($con){
?>
<script>
alert("connected successfully");
</script>
<?php
}
else{

?>
<script>
alert(" not connected ");
</script>
<?php

}

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$qua=$_POST['qua'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$job=$_POST['job'];

$qu="INSERT INTO `new`(`name`, `email`, `qua`, `phone`, `city`, `job`) VALUES ('$name','$email','$qua','$phone','$city','$job')";
  $run=mysqli_query($con,$qu);

if($run)
{
?>
<script>
alert("data insert successfully");
</script>
<?php

}
else{

?>
<script>
alert("not insert");
</script>
<?php


}

}



?>