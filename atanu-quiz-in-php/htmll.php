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
    <title>Html exam</title>
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

		<h1>Simple Quiz  On HTML</h1><br>

<?php

if($ran==1){

echo '<form action="result1.php" method="post" >
		
            <ol>
            
                <li>
                
                    <h3>The attribute of  form  tag</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) method </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) action </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) both b and c </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) path </label>
                    </div>
                
                </li>
 <li>
                
                    <h3>What is the correct HTML element for inserting a line break?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) bd</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B)br</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C)break</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) bl</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Choose the correct HTML element to define important text</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) important </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) strong</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) br </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) b</label>
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
                
                    <h3>HTML stands for </h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) High Tools Market Language </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) High tools Markup Language </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Hypertext Market Language </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) Hypertext Markup Language </label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit" class="btn btn-primary" />
		
        </form><br><br>
        
	
	';





}


if($ran==2){

echo '<form action="result1.php" method="post" >
		
<ol>
            
                <li>
                
                    <h3>The attribute of  form  tag</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) method </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) action </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) both b and a </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) path </label>
                    </div>
                
                </li>
 <li>
                
                    <h3>What is the correct HTML element for inserting a line break?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) bd</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B)br</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C)break</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) bl</label>
                    </div>
                
                </li>
                <li>
                
                <h3>HTML stands for </h3>
                
                <div>
                    <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                    <label for="question-5-answers-A">A) High Tools Market Language </label>
                </div>
                
                <div>
                    <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                    <label for="question-5-answers-B">B) High tools Markup Language </label>
                </div>
                
                <div>
                    <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                    <label for="question-5-answers-C">C) Hypertext Market Language </label>
                </div>
                
                <div>
                    <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                    <label for="question-5-answers-D">D) Hypertext Markup Language </label>
                </div>
            
            </li>
                
                <li>
                
                    <h3>Choose the correct HTML element to define important text</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) important </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) strong</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) br </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) b</label>
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


if($ran==3){

echo '<form action="result1.php" method="post" >
<ol>
            
<li>

    <h3>The attribute of  form  tag</h3>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
        <label for="question-1-answers-A">A)action  </label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
        <label for="question-1-answers-B">B) method </label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
        <label for="question-1-answers-C">C) both b and c</label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
        <label for="question-1-answers-D">D) path </label>
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

    <h3>What is the correct HTML element for inserting a line break?</h3>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
        <label for="question-4-answers-A">A) bd</label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
        <label for="question-4-answers-B">B)br</label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
        <label for="question-4-answers-C">C)break</label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
        <label for="question-4-answers-D">D) bl</label>
    </div>

</li>
<li>

<h3>HTML stands for </h3>

<div>
    <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
    <label for="question-5-answers-A">A) High Tools Market Language </label>
</div>

<div>
    <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
    <label for="question-5-answers-B">B) High tools Markup Language </label>
</div>

<div>
    <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
    <label for="question-5-answers-C">C) Hypertext Market Language </label>
</div>

<div>
    <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
    <label for="question-5-answers-D">D) Hypertext Markup Language </label>
</div>

</li>

<li>

    <h3>Choose the correct HTML element to define important text</h3>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
        <label for="question-2-answers-A">A) important </label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
        <label for="question-2-answers-B">B) strong</label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
        <label for="question-2-answers-C">C) br </label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
        <label for="question-2-answers-D">D) b</label>
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