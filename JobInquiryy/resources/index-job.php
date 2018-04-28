<?php
	session_start();	
	if(!empty($_SESSION['user']))
	{
		header('Location: jobs-member-activ.php');
	}
	else
	{
		header('Location: jobs.php');
	}
?>