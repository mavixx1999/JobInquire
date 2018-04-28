<?php 
	if(!empty($_SESSION['user']))
	{
		include 'nav-active.php';
	}
	else
	{
		include 'nav-inactive.php';
	}
?>