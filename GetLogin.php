	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
</head>
<body>

	<h1>Session</h1>

	<?php 

if (isset($_GET[''])){

$UserNameID = $_GET['userNameId'];
$PASSWORD = $_POST['password'];

$f = fopen("data1.txt", "r");

$data = fread($f, filesize("data1.txt"));

$data_filter = explode ("\r\n", $data);

for($i = 0; $i<count($data_filter); $i++)
{
	$_SESSION['fname'] = $firstname;
		$_SESSION['lname'] = $lastname;
		

		echo "Session value user_id is: " . $_SESSION['fname'];
		echo "Session value user_id is: " . $_SESSION['lname'];

		echo "<br>";

	

}
};




		// To destroy a session after login
		session_destroy();
	?>

	<button onclick="location.href='RegistrationHandling.html' ">Log out</button>

</body>
</html>