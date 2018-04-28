<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "jobinquirydata";
	$tbname = "member";

	$conn = new mysqli($server, $user, $pass, $dbname);
	$usern = $_SESSION['user'];
	$sql = "SELECT * FROM ".$tbname. 
	" WHERE username='$usern'";
	$result = $conn->query($sql);
	$row = $row = $result->fetch_assoc();
	echo "<table class='table-hover'>";
	echo "<thead>
			<tr>
				<th></th>
				<th>User Info</th>
			</tr>
		 </thead>";
	echo "<tbody>";
	echo "<tr>
			<td>Name&nbsp;&nbsp;</td>
			<td>".$row['fname'] . " " . $row['lname']."</td>
		 </tr>";
	echo "<tr>
			<td>Username&nbsp;&nbsp;</td>
			<td>".$row['username']."</td>
		 </tr>";
	echo "<tr>
			<td>Gender&nbsp;&nbsp;</td>
			<td>".$row['gender']."</td>
		 </tr>";
	echo "<tr>
			<td>Address&nbsp;&nbsp;</td>
			<td>".$row['address']."</td>
		 </tr>";
	echo "<tr>
			<td>Email&nbsp;&nbsp;</td>
			<td>".$row['email']."</td>
		 </tr>";
	echo "<tr>
			<td>Date Joined&nbsp;&nbsp;</td>
			<td>".$row['dateadded']."</td>
		 </tr>";
	echo "</tbody>";
	echo "</table>";
?>