<?php
session_start();
if(!isset($_SESSION['name']))
{
header('location:login.php');

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Css exam</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>

h1{

animation:anim 2s linear infinite;
}
@keyframes anim{

    0%{

color:rgb(236, 15, 126);

}
30%{

color:lime;

}
60%{

color:rgb(243, 77, 11);

}
100%{

color:blue;

}


}


</style>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100">

<nav class="navbar navbar-expand-lg navbar-dark  bg-dark fixed-top text-center">
<div class="container">
  <h2 class="navbar-brand">welcome <?php  echo $_SESSION['name'] ;?></h2>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a href="logout.php" class="nav-link">logout</a>
      </li>
     
      
    </ul>
    </div>
  </div>
</nav>
<br><br><br>
<section>
<div class="container">
<div class="col-lg-8 m-auto d-block ">

<?php
$ran=rand(1,3);





?>
	<div id="page-wrap">

		<h1>Simple Quiz  On CSS</h1><br>

<?php

if($ran==1){

echo '<form action="result3.php" method="post" >
		
            <ol>
            
                <li>
                
                    <h3> Which of the following property is used to define the animations that should be run?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) animation-iteration-count </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B)animation-delay </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C)   animation-name</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) animation-duration </label>
                    </div>
                
                </li>
 <li>
                
                    <h3> Which of the following property defines whether table cell borders are connected or separate?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) border-style</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B)border-collapse</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C)border-color</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D)border-radius</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3> Which of the following property defines the style for the right border of an element?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) border-left </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) border-right</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) border-style </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) border-right-style</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What tag is used to display a picture in a HTML page?  </h3>

                  
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) img </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) picture</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) image </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) src </label>
                    </div>
                
                </li>
                
               
                
                <li>
                
                    <h3>Which of the following property generates content in a document and is used with the :before and :after pseudo-elements? </h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) style </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) text </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) content </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) contents </label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit" class="btn btn-primary" />
		
        </form><br><br>
        
	
	';





}


if($ran==2){

echo '<form action="result3.php" method="post" >
		
<ol>
            

<li>

    <h3> Which of the following property defines whether table cell borders are connected or separate?</h3>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
        <label for="question-4-answers-A">A) border-style</label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
        <label for="question-4-answers-B">B)border-collapse</label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
        <label for="question-4-answers-C">C)border-color</label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
        <label for="question-4-answers-D">D)border-radius</label>
    </div>

</li>

<li>

    <h3> Which of the following property is used to define the animations that should be run?</h3>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
        <label for="question-1-answers-A">A) animation-iteration-count</label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
        <label for="question-1-answers-B">B)animation-delay </label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
        <label for="question-1-answers-C">C) animation-name </label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
        <label for="question-1-answers-D">D) animation-duration </label>
    </div>

</li>

<li>

    <h3>What tag is used to display a picture in a HTML page?  </h3>

  
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
        <label for="question-3-answers-A">A) img </label>
    </div>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
        <label for="question-3-answers-B">B) picture</label>
    </div>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
        <label for="question-3-answers-C">C) image </label>
    </div>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
        <label for="question-3-answers-D">D) src </label>
    </div>

</li>

<li>

    <h3> Which of the following property defines the style for the right border of an element?</h3>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
        <label for="question-2-answers-A">A) border-left </label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
        <label for="question-2-answers-B">B) border-right</label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
        <label for="question-2-answers-C">C) border-style </label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
        <label for="question-2-answers-D">D) border-right-style</label>
    </div>

</li>

<li>

    <h3>Which of the following property generates content in a document and is used with the :before and :after pseudo-elements? </h3>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
        <label for="question-5-answers-A">A) style </label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
        <label for="question-5-answers-B">B) text </label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
        <label for="question-5-answers-C">C) content </label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
        <label for="question-5-answers-D">D) contents </label>
    </div>

</li>

</ol>

<input type="submit" value="Submit" class="btn btn-primary" />

</form><br><br>
        


';
}


if($ran==3){

echo '<form action="result3.php" method="post" >
<ol>
            
<li>

    <h3> Which of the following property is used to define the animations that should be run?</h3>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
        <label for="question-1-answers-A">A) animation-iteration-count </label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
        <label for="question-1-answers-B">B)animation-delay </label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
        <label for="question-1-answers-C">C) animation-name </label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
        <label for="question-1-answers-D">D) animation-duration </label>
    </div>

</li>
<li>

    <h3> Which of the following property defines whether table cell borders are connected or separate?</h3>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
        <label for="question-4-answers-A">A) border-style</label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
        <label for="question-4-answers-B">B)border-collapse</label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
        <label for="question-4-answers-C">C)border-color</label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
        <label for="question-4-answers-D">D)border-radius</label>
    </div>

</li>

<li>

    <h3> Which of the following property defines the style for the right border of an element?</h3>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
        <label for="question-2-answers-A">A) border-left </label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
        <label for="question-2-answers-B">B) border-right</label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
        <label for="question-2-answers-C">C) border-style </label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
        <label for="question-2-answers-D">D) border-right-style</label>
    </div>

</li>
<li>

    <h3>Which of the following property generates content in a document and is used with the :before and :after pseudo-elements? </h3>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
        <label for="question-5-answers-A">A) style </label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
        <label for="question-5-answers-B">B) text </label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
        <label for="question-5-answers-C">C) content </label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
        <label for="question-5-answers-D">D) contents </label>
    </div>

</li>

<li>

    <h3>What tag is used to display a picture in a HTML page?  </h3>

  
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
        <label for="question-3-answers-A">A) img </label>
    </div>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
        <label for="question-3-answers-B">B) picture</label>
    </div>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
        <label for="question-3-answers-C">C) image </label>
    </div>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
        <label for="question-3-answers-D">D) src </label>
    </div>

</li>





</ol>

<input type="submit" value="Submit" class="btn btn-primary" />

</form><br><br>
	
	';





}





  ?>




		</div>
        </div>
		</div>


</section>
    

   
</body>
</html>