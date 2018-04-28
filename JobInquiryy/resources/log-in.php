
<!DOctype html>
<html>

<head>
	<title>Job Inquiry</title>
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
			background-color: #99FFCC;
			text-align: center;
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
			<div class="col-md-8">
				
			</div>
			<div class="col-md-4 jumbotron text-left pad">
				<h2>Log In</h2><br>
				<form action="verify-user.php" method="post" class="text-center" role="form">
					<input type="text" id="title" placeholder="Username" class="form-control" name="usrname"><br>
					<input type="password" id="title" placeholder="Password" class="form-control" name="pssword"><br>
					<input type="submit" name="submit" value="Ok" class="btn btn-success">&nbsp;<a href="sign-up.php" style="color: #333;">Create Account</a>
				</form>
				
			</div>
		</div>
</body>

</html>