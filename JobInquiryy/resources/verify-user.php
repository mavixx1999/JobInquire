<?php
	session_start();
	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "jobinquirydata";
	$tbname = "member";

	$username = $_POST['usrname'];
	$password = $_POST['pssword'];

	$conn = new mysqli($server, $user, $pass, $dbname);

	$sql = "SELECT username FROM ".$tbname. 
	" WHERE username='$username'
	and password='$password'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	if($count == 1)
	{
		$_SESSION['user'] = $username;
		header("Location: member.php");
	}
	else 
	{
		header("Location: log-in-failed.php");
	}
	$sqll = "SELECT username FROM admin WHERE username='$username' and password='$password'";
	$rslt = $conn->query($sqll);
	$r = mysqli_fetch_array($rslt, MYSQLI_ASSOC);
	$c = mysqli_num_rows($rslt);
	if($c == 1)
	{
		$_SESSION['administrator'] = $username;
		header("Location: admin.php");
	}

	$conn->close();
?>