
<?php


$to_email="atanuj383@gmail.com";
$subject=" simple email test via php";
$body="hii,this is the email send by php script";
$headers="From:atanuj383@gmail.com";



if(mail($to_email,$subject,$body,$headers))
{
echo"email send $to_email";

}
else{

    echo"no send";
}

?>