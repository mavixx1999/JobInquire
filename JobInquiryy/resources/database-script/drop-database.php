<?php
	class Database
	{
		function createDB($servername, $username, $password, $dbName)
		{
			$connection = new mysqli($servername, $username, $password);
			if($connection->connect_error)
			{
				die("Connerction failed: " . $connection->connect_error);
			}
			$sql = "DROP DATABASE ". $dbName;
			if($connection->query($sql) === TRUE)
			{
				echo "Database droped successfully.";
			}
			else
			{
				echo "Error dropping database: " . $connection->error;
			}
			
			$connection->close();
		}
		
	}
	$data = new Database;
	$data->createDB("localhost", "root", "", "jobinquirydata");
?>
<!Doctype html>
<head>
	<title>Database DROP</title>
</head>
<body>
	<form action="index.php">
		<button class="btn btn-default">GO Back</button>
	</form>
</body></html>