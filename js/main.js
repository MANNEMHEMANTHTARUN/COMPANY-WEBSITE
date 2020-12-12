<?php
$to="navaridineshreddy@gmail.com";
$subject="Response";
$message="Iam thankful";
$headers="from:siddarth.8@gmail.com";
if(mail($to,$subject,$message,$headers)){
echo"mail sent";
else{
echo "cantt send mail";
}
?>