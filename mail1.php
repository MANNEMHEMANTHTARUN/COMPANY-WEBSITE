<?php
$Name = $_REQUEST['Name'];
$Email=$_REQUEST['Email'];
$Subject=$_REQUEST['Subject'];
$Message=$_REQUEST['Message'];
if(empty($Name) ||empty($Email)||empty($Subject)||empty($Message))
{
echo"Fields should not be empty";
}
{
mail("navaridineshreddy@gmail.com","$Email",$subject,$Message,"From:$name<$dineshreddy221199@gmail.com>");
echo"<script type='text/javascript'>alert('meassage sent');
window.history.go(-1);
</script>";
}
?>