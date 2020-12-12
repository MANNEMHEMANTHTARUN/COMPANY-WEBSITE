<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];
if (!empty($Name)){
if (!empty($Email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname="vaagdhan";
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_errno().')'
	.mysqli_connect_error());
}
else{
$sql = "INSERT INTO Responses (Name,Email,Subject, Message)
values ('$Name','$Email','$Subject','$Message')";
if ($conn->query($sql)){
echo "<script type='text/javascript'>alert('Message sent Successfully');
window.history.go(-1);
</script>";
}

else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Email should not be empty";
die();
}
}
else{
echo "name should not be empty";
die();
}
?>