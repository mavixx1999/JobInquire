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
			background-color: #99FFCC;
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
				<h2>Sign Up</h2>
				<form action="member-added.php" method="post" class="text-center">
					<input type="text" name="fname" placeholder="First Name" class="form-control" value=""><br>
					<input type="text" name="lname" placeholder="Last Name" class="form-control" value=""><br>
					<input type="text" name="address" placeholder="Address" class="form-control" value=""><br>
					<div class="form-group text-left">
					 	<label>Gender:</label>
							<label><input type="radio" name="gender" value="Male">Male</label>
							<label><input type="radio" name="gender" value="Female">Female</label>
					</div>
					<input type="password" name="passwordin" placeholder="Password" class="form-control" value=""><br>
					<input type="email" name="email" placeholder="example@email.com" class="form-control" value=""><br>
					<input type="text" name="username" placeholder="username" class="form-control" value=""><br>
					<input type="submit" name="submit" value="Submit" class="btn btn-success">&nbsp;<a href="log-in.php" style="color: #333;">Log In</a>
				</form>
			</div>
		</div>
	</div>
</body>

</html>
