<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATANU-TECH</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<style>
    /* Make the image fully responsive */
    html{
      scroll-behavior: smooth;
    }
    .carousel-inner img {
      width: 100%;
      height: 100vh;
    }
  i{
  margin-right: 10px;


  }
body{
padding: 0;
margin: 0;
box-sizing: border-box;
position: relative; 

}
#loding{
  position: fixed;
  width:100%;
  height:100vh;
  background:white url('https://i.pinimg.com/originals/78/e8/26/78e826ca1b9351214dfdd5e47f7e2024.gif') no-repeat center;
  z-index: 2222222;
}

    </style>
</head>
<body  data-spy="scroll" data-target=".navbar" data-offset="100" onload="my()">

<div id="loding"></div>

    <header id="one">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#"><h1 class="animated infinite bounce delay-2s">ATANU-TECH:)</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item ">
              <a class="nav-link" href="#one">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#two">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" arclass="fa-2x" aria-expanded="false">
                More
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#three">Contact</a>
                <a class="dropdown-item" href="#four">Gallery</a>
                <a class="dropdown-item" href="#six">Utube</a>
                
                
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#five" tabindex="-1" >Services</a>
            </li>
          </ul>
          
          <form class="form-inline pl-3 mb-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        
        </div>
      </nav>

      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="do.jpg" alt="Los Angeles" width="1100px" height="500px">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>We had such a great time in LA!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="n.jpg" alt="Chicago" width="1100px" height="500px">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="n.jpg" alt="New York" width="1100px" height="500px">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      

    </header>

    <section id="two">
        <div class="container-fluid" >
            <h1 class="text-center text-primary pt-5">About Us</h1>
            <hr class="w-25 mx-auto pb-3">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="n.jpg" class="img-fluid mb-5" style="width:700px;height:400px">

                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>WHO AM I?</h2>
                     <hr>
                     <p>Our images are one of the best.we provide best images.If u want to know More
                         then read whole site.we provide a good images.If u want to know More
                         then read whole site.we provide a good images.If u want to know More
                         then read whole site.
                     </p>
                     <h4>we provide a good images.If u want to know More
                        then read whole site.</h4><br><br>
                     <button class="btn btn-outline-success">About Us</button>
                </div>
                



            </div>

        </div>
    </section>
<section id="five">

    <div class="container">
        <h1 class="text-center text-success pt-5">Services</h1>
        <hr class="w-25 mx-auto pb-3">
       <div class="row text-center">
           <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4 col-12">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="n.jpg" alt="Card image">
                        <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
           </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4 col-12">
                        <div class="card" >
                            <img class="card-img-top img-fluid" src="n.jpg" alt="Card image">
                            <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4 col-12 ">
                        <div class="card" >
                            <img class="card-img-top img-fluid" src="n.jpg" alt="Card image">
                            <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
               </div>
    
        </div>
    </div>

</section><br><br>
<section >
    <article>
        <div class="bg-info text-center my-4 p-4 text-white">
            <h2>7063636964</h2>
            <p>contect now </p>
            <button class="btn btn-danger">Contect</button>
        </div>


    </article>
</section>
<section id="four">
    <div class="container text-center ">
        <h1 class="text-center text-warning pt-5">Gallery</h1>
        <hr class="w-25 mx-auto pb-3">
        <div class="row ">
            <div class="col-lg-4 col-md-4 col-sm-4  col-12 mb-5">

                <img src="n.jpg" class="img-fluid" style="width:300px;height:180px"> 
                <h3 class="text-center">Weather</h3> 
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-5">

                <img src="n.jpg" class="img-fluid" style="width:300px;height:180px">
                <h3 class="text-center">Beauty</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-5">

                <img src="do.jpg" class="img-fluid" style="width:300px;height:180px">
                <h3 class="text-center">Login</h3>
            </div>
            
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-5">

                <img src="n.jpg" class="img-fluid" style="width:300px;height:180px">
                <h3 class="text-center">Dog</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-5">

                <img src="do.jpg" class="img-fluid" style="width:300px;height:180px">
                <h3 class="text-center">Tourist</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-5">

                <img src="n.jpg" class="img-fluid" style="width:300px;height:180px">
                <h3 class="text-center">Snow fall</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-5">

                <img src="n.jpg" class="img-fluid" style="width:300px;height:180px">
                <h3 class="text-center">Culture</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-5">

                <img src="do.jpg" class="img-fluid" style="width:300px;height:180px">
                <h3 class="text-center">Seience</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-5">

                <img src="n.jpg" class="img-fluid" style="width:300px;height:180px">
                <h3 class="text-center">Future</h3>
            </div>
            
        </div>
    </div>
</section>
<section>
    <article>
        <div class="bg-info text-center my-4 p-4 text-white">
            <h2>Want to Join</h2>
            <h4 class="text-danger">Be a part of Atanu-Tech</h4>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
            Join Now
              </button>
        </div>
        
    
          <!-- The Modal -->
          <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title"> <i class="fa fa-user-circle fa-2x" ></i>Sign up</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="log.php" method="post" class="needs-validation" novalidate>
                        <div class="form-group">
                          <label><i class="fa fa-user fa-2x" ></i>Username:</label>
                          <input type="text" class="form-control" name="user" placeholder="Enter username" autocomplete="off" required>
                          
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                          <label> <i class="fa fa-lock fa-2x"></i>Password:</label>
                          <input type="password" class="form-control" name="password" placeholder="Enter password"  required>
                          
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" required> I agree on it.
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Check this checkbox to continue.</div>
                          </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                    
                </div>
                
                
                
              </div>
            </div>
          </div>

        </article> 
</section>
<section id="three">
    <div class="container" >
        <h1 class="text-center text-danger pt-5">Contect Us</h1>
        <hr class="w-25 mx-auto pb-3">
        <form action="userinfo.php" method="post" style="width:300px" class="mx-auto mb-5">
            <div class="form-group " >
              <label ><i class="fa fa-user fa-2x" ></i>Name:</label>
              <input type="text" name="user" class="form-control" placeholder="Enter Name"  required autocomplete="off">
            </div>
            <div class="form-group">
                <label ><i class="fa fa-envelope-open fa-2x" ></i>Email address:</label>
                <input type="email" name=" email" class="form-control" placeholder="Enter email"  required autocomplete="off">
              </div>
            <div class="form-group">
                <label ><i class="fa fa-phone fa-2x" ></i>Number:</label>
                <input type="tel" name="number" class="form-control" placeholder="Enter number"  required autocomplete="off">
              </div>
              
              <div class="form-group">
                <label > <i class="fa fa-pencil fa-2x"></i>About you:</label>
               <textarea class="form-control" name="about"  required>

               </textarea>
              </div>
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" required> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-outline-success">Submit</button>
          </form>
    </div>
</section>
<section id="six">
  <div class="container">
  <h2 class="text-center text-primary ">Best Song</h2>
<hr class="w-25 mx-auto"><br>
<iframe width="60%" height="315" src="https://www.youtube.com/embed/WNeLUngb-Xg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="d-block m-auto  "></iframe><br><br> 

</div>
</section>

<footer>
    <h4 class="text-center bg-dark text-white p-2">@copyright: ATANU-TECH:)-2020</h4>
</footer>

<script>
    // Disable form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();


      var a=document.getElementById('loding');
      function my(){
            a.style.display='none';


      }



    </script>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>