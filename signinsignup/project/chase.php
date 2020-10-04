<html>
<head><title>chase</title>


<style>
body{
background:red;

}
table{

border:2px solid green;
}

td{
padding:20px;
border:2px solid green;
}

.bg{
background:black;
}

</style>

</head>
<body><br><br>


<form action="" method="post"> 
<input type="text" size="50" name="inputt" >
<input type="submit" name="submit" required>
</form
<table >

<?php
if(isset($_POST['submit']))
{  $data=$_POST['inputt'];

 for($row=1; $row<=$data; $row++){
        echo"<tr>";
      for($col=1; $col<=$data; $col++){

	  if(($row + $col)%2==0){
		echo"<td class='bg'> </td> ";
		
		
		
		}
		else{

			echo"<td>   </td> ";
	
		}

    }



echo "</tr>";


}


}




?>
</table>
</center>
</body>

</html>
