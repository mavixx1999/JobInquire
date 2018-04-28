<?php
	session_start();	
	if(!empty($_SESSION['user']))
	{
		header('location: resources/home-active.php');
	}
	else
	{
		header('location: resources/home.php');
	}
?>