<?php 
	session_start();
?>
<!DOctype html>
<html>

<head>
	<title>Test123</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style>
		body
		{
			background-image: url('jobimages/j12.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}
		.jumbotron
		{
			background-color: #DC143C;
			color: white;
		}
		.pad
		{
			padding: 20px;
		}
		.button-width-long
		{
			width: 100%;
		}
		.size
		{
			width: 100%;
		}
		h3{
		  color: black;
		  text-decoration: bold;
		}
		p{
		  color: black;
		  text-decoration: bold;
		}
		.navbar-inverse{
		    border-color:black;
		  color: black;
		  text-decoration: bold;
		background-color: rgba(0,0,0,.0001)
		}
		#tx{
		  color: black;
		  text-decoration: bold;
		}
		.adjust
    	{
      		position: relative;
      	   	top: 70px;
    	}
	</style>
</head>

<body>

	<?php include 'nav.php'; ?>
	<div class="container adjust">
		<div class="row">
			<div class="col-sm-8">
				
			</div>
			<div class="col-md-4 jumbotron text-left pad">
				<h2 class="text-center">Goodbye!</h2>
				<form action="../index.php" metho="post" class="text-center">
					<input type="submit" value="Ok" class="btn btn-success">
				</form>
			</div>
		</div>
	</div>
</body>

</html>

<?php 
session_unset();
session_destroy(); 
?>