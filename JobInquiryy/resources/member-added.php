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

				<?php 
					$username = $_POST['username'];
					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
					$address = $_POST['address'];
					$gender = $_POST['gender'];
					$psswrd = $_POST['passwordin'];
					$email = $_POST['email'];

					$servername = "localhost";
					$usernamedb = "root";
					$dbpassword = "";
					$dbname = "jobinquirydata";
					$tbname = "member";

					$conn = new mysqli($servername, $usernamedb, $dbpassword, $dbname);

					$sql = "INSERT INTO ".$tbname."(fname, lname, address, gender, password, email, username, dateadded) VALUES('$fname', '$lname', '$address', '$gender', '$psswrd', '$email','$username', NOW())";
					
					$conn->query($sql);

					$conn->close();
				?>
				<?php 
				$_SESSION['user'] = $_POST['username'];
				?>

				<h4 class="text-center">Welcome <?php echo $_POST['fname']." ".$_POST['lname'] ?>!</h4>


				<form action="log-in.php" method="post" class="text-center">
					<input type="submit" name="submit" value="Go back" class="btn btn-success">
				</form>
			</div>
		</div>
	</div>
</body>

</html>
