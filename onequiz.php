
<?php
    
   session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atanu</title>


    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>




</style>
</head>
<body>
<br><br>
<div class="container">
    <h2 class="text-center">welcome to quiz</h2>
    <br>
    <div class="card">
    
    <h3 class="card-header text-center">welcome atanu</h3>
    </div>
    <br>
    <div class="col-lg-8 m-auto d-block ">
    <form action="check.php" method="post">
    <?php

$con=mysqli_connect('localhost','root','','somu');
if($con)
{?>
<script>
alert("connected");
</script>

<?php
}
else{

    ?>
    <script>
    alert(" no connecte");
    </script>

<?php

}



for($i=1;$i<6;$i++)
    {
       
    $qu="SELECT * FROM `quiz` WHERE qid=$i  ";
    

    $fir=mysqli_query($con,$qu) ;
    
   
    while(  $data =mysqli_fetch_array($fir))
    {
        ?>
                <div class="card">
                <h6 class="card-header "> <?php  echo $data['questions']; ?></h6>

                
                <?php
            $qu1="SELECT * FROM `ans`WHERE  qqid=$i  ";

            $fi=mysqli_query($con,$qu1);
           
            while(  $rows=mysqli_fetch_array($fi))
            {
                ?>
                <div calss="card-body">
                <input type="radio" name="qcheck[ <?php echo $rows['qqid']; ?>]" value="<?php echo $rows['aaid']; ?>">
                <?php echo $rows['answer']; ?><br><br>
                
                
                </div>

            <?php
                }
    

        ?>
 
     
      </div>
      
      <?php
    }   

}
    ?>
    
    <div class=" text-center">
     <input type="submit"  name="submit" value="Submit" class="btn btn-primary">
     </div>
    
     
    </form>
</div>
<br>
<div class="text-center">
<a href="logout.php" class="btn btn-success ">logout</a>
</div>
<br><br>
</div>
    
</body>
</html>