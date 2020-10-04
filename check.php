<?php
   session_start();
//    if(!isset($_SESSION['name']))
//     {
//  header('location:login.php');

//    }


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
    alert(" no connect");
    </script>

<?php
}
// $result=0;

// if(isset($_POST['submit']))
// {
//      if(!empty($_POST['qcheck']))
//      {
//         $count=count($_POST['qcheck']);
//         echo " out of 5 ,you have select ".$count." option";

       
       
//         $selected=$_POST['qcheck'];
//         print_r($selected);
//         $qu="SELECT * FROM quiz ";
//         $fir=mysqli_query($con,$qu);
//         $j=1;
//         while($row=mysqli_fetch_array($fir))
//         {
           
//             echo $row['aid'];
//             $res = $row['aid']==$selected;
//             if($res)
//             {
                
//                 $result++;

               
//             }


//             $j++;
            
            

//         }
//         echo "<br>"."result is".$result;
       

//      }




// }

if(isset($_POST['submit'])){

    if(!empty($_POST['qcheck']))
    {
        $coun=count($_POST['qcheck']);

        echo "out of 5,u selected ".$coun." options";

        $res=0;
        $i=1;
        $select=$_POST['qcheck'];
        //print_r ($select);

        $qu="SELECT * FROM `quiz`";
        $query=mysqli_query($con,$qu);

        while($rows =mysqli_fetch_array($query))
        {

            //print_r ($rows['aid']);

            $checked= $rows['aid'] == $select[$i];

            if($checked)
            {
                $res ++;

            }

            $i++;
        }
echo "<br>result is ".$res;

    }





}


?>
