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
			background-color: transparent;
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
		.activ
		{
			text-decoration: none;
			color: #333;
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
			<div class="col-sm-7">
				
			</div>
			
			<div class="col-md-5 jumbotron text-left pad">

				<div class="panel-group">
				    <div class="panel panel-default">
				      <a data-toggle="collapse" href="#activ-member"><div class="panel-heading text-center">
				        <h4 class="panel-title activ">
				          Active
				        </h4>
				        </a>
				      </div>
				      <div id="activ-member" class="panel-collapse collapse">
				        <div class="panel-body">
				        	<h2 class="text-center">Welcome!</h2>

							<p><?php include 'personaldata.php'; ?></p>

							<form action="log-out.php" method="post" class="text-right">
								<input type="submit" name="submit" value="Log out" class="btn btn-danger">
							</form>
				        </div>
				        <div class="panel-footer"></div>
				      </div>
				  	</div>
				</div>

				
			</div>
		</div>
	</div>
</body>

</html>