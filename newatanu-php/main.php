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
    <style>
.box{
width:250px;
}



    </style>
</head>
<body>
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="text-primary font-weight-bold">Welcome to Job World</h1>
          <p>World Best Job Place now in Your Hand</p>
          <a href="show.php" <button type="submit" class="btn btn-primary float-left">Show all data</button></a>
          <a href="logout.php" <button type="submit" class="btn btn-primary float-right">Logout</button></a><br><br>
        </div>
      </div>
      <div class="container box m-auto text-center">
        <form action="" method="post" class="was-validated">
            <div class="form-group">
              
              <input type="text" class="form-control"  placeholder="Enter username" name="name" required autocomplete="off">
              
              
            </div>
            <div class="form-group">
              
              <input type="email" class="form-control"  placeholder="Enter email" name="email" required autocomplete="off">
              
              
            </div>
            
            <button type="submit" name="search" class="btn btn-primary">Search</button>
            <br><br>
          </form>


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

if(isset($_POST['search']))

{
$name=$_POST['name'];
$email=$_POST['email'];



$qu="SELECT * FROM `new` WHERE   name='$name' AND email='$email' ";
$run=mysqli_query($con,$qu);
while($row = mysqli_fetch_array($run))
{
?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['qua']; ?></td>
                      <td><?php echo $row['phone']; ?></td>
                      <td><?php echo $row['city']; ?></td>
                      <td><?php echo $row['job']; ?></td>
                      <td><a href="update.php?id=<?php echo $row['id']; ?>   " data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o" ></i></a></td>
                      <td><a href="delete.php?idth=<?php echo $row['id']; ?>  " data-toggle="tooltip" onclick=" return del()" data-placement="top" title="Delete"><i class="fa fa-trash" ></i></a></td>
                      
                    </tr>


<?php
                 



}
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



