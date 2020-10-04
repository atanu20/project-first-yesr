<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>

    </style>
</head>
<body>
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="text-primary font-weight-bold">Welcome to Job World</h1>
          <p>World Best Job Place now in Your Hand</p>
          <a href="main.php" <button type="submit" class="btn btn-primary float-left">Back to Home</button></a>
          <a href="" <button type="submit" class="btn btn-primary float-right">Logout</button></a>
          <br><br>
        </div>
      </div>
      <div class="container  m-auto text-center">

        <div class="table-responsive-sm">          
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>EDUCATION</th>
                 
                  <th>NUMBER</th>
                  <th>City</th>
                  <th>JOB</th>
                  <th colspan="2">OPERATION</th>
                  
                </tr>
              </thead>
              <tbody>

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

$sequery="SELECT * FROM `new`";
$query=mysqli_query($con,$sequery);
$nums=mysqli_num_rows($query);

while($data= mysqli_fetch_array($query))
{
 ?>

                <tr>
                  <td><?php echo $data['id']; ?></td>
                  <td><?php echo $data['name']; ?></td>
                  <td><?php echo $data['email']; ?></td>
                  <td><?php echo $data['qua']; ?></td>
                  <td><?php echo $data['phone']; ?></td>
                  <td><?php echo $data['city']; ?></td>
                  <td><?php echo $data['job']; ?></td>
                  <td><a href="update.php?id=<?php echo $data['id']; ?> " data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o" ></i></a></td>
                  <td><a href="delete.php?idth=<?php echo $data['id']; ?> " onclick=" return del()" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash" ></i></a></td>
                  
                </tr>

<?php


}


?>
              </tbody>
            </table>
            </div>
          </div>

          
          
          <script>
            $(document).ready(function(){
              $('[data-toggle="tooltip"]').tooltip();
            });


function del()
{

return confirm('Are u sure you want to delete this data???');

}


            </script>
</body>
</html>