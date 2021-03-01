<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>

	<h1>Registration Form Action</h1>

	<?php 

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$Gender = $_POST['gender'];
$emailId = $_POST['Email'];
$userNameId = $_POST['userNameId'];
$Password = $_POST['password'];
$RecoveryEmail = $_POST['Remail'];




	$f = fopen("data1.txt","a");


fwrite($f, "First Name= " .$firstName. "\r\n");
fwrite($f, "Last Name= " .$lastName. "\r\n");
fwrite($f, "Gender= " .$Gender."\r\n");
fwrite($f, "Email= ".$emailId. "\r\n");
fwrite($f, "User Name=".$userNameId. "\r\n");
fwrite($f, "Password=".$Password. "\r\n");
fwrite($f, "Recovery Mail=".$RecoveryEmail. "\r\n\r\n");
fclose($f);



 header('Location: login.html');
		exit;


		
	?>

</body>
</html>