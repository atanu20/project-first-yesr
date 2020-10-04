<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</script>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<br><br>
<div class="container">
<div class="col-lg-8 m-auto d-block">
<h2>Mail send </h2>
<form action="" method="post" >
<?php

if(isset($_POST['submit']))
{
if (mail($_POST['email'],$_POST['subject'],$_POST['message']))
{

echo "mail send";

}else{
    echo"failed";
}



}



?>
            
            <div class="form-group">
                <label ><i class="fa fa-envelope-open fa-2x" ></i>Email address:</label>
                <input type="email" name=" email" class="form-control" placeholder="Enter email"  required autocomplete="off">
              </div>
            <div class="form-group">
                <label ><i class="fa fa-phone fa-2x" ></i>subject:</label>
                <input type="text" name="subject" class="form-control" placeholder="Enter subject"  required autocomplete="off">
              </div>
              
              <div class="form-group">
                <label > <i class="fa fa-pencil fa-2x"></i>Message:</label>
               <textarea class="form-control" name="message"  required>

               </textarea>
              </div>
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" required> Remember me
              </label>
            </div>
            <button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
          </form>



</div>




</div>
    
</body>
</html>