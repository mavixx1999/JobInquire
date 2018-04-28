<?php
	class Database
	{
		
		function createTablejobs($servername, $username, $password, $dbName)
		{
			$connection = new mysqli($servername, $username, $password, $dbName);
			if ($connection->connect_error) {
    			die("Connection failed: " . $connection->connect_error);
			} 
			$sql = "CREATE TABLE jobs  (
				id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				category VARCHAR(100) NOT NULL,
				jobtitle VARCHAR(100) NOT NULL,
				location VARCHAR(255) NOT NULL,
				salary VARCHAR(100) NOT NULL,
				company VARCHAR(100) NOT NULL,
				jobdescription TEXT NOT NULL,
				contact VARCHAR(100) NOT NULL,
				dateadded DATE NOT NULL
			)";
			if ($connection->query($sql) === TRUE) {
    			echo "Table Jobs created successfully <br>";
			} else {
			    echo "Error creating table: " . $connection->error;
			}

			$connection->close();

		}
		function createAdmin($servername, $username, $password, $dbName)
		{
			$connection = new mysqli($servername, $username, $password, $dbName);
			if ($connection->connect_error) {
    			die("Connection failed: " . $connection->connect_error);
			} 
			$sql = "CREATE TABLE admin (
				id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				username VARCHAR(100) NOT NULL,
				fname VARCHAR(100) NOT NULL,
				lname VARCHAR(100) NOT NULL,
				address VARCHAR(250) NOT NULL,
				password VARCHAR(255) NOT NULL,
				gender VARCHAR(100) NOT NULL,
				dateadded DATE NOT NULL
			)";
			if ($connection->query($sql) === TRUE) {
    			echo "Table Admin created successfully <br>";
			} else {
			    echo "Error creating table: " . $connection->error;
			}

			$connection->close();

		}
		function createMember($servername, $username, $password, $dbName)
		{
			$connection = new mysqli($servername, $username, $password, $dbName);
			if ($connection->connect_error) {
    			die("Connection failed: " . $connection->connect_error);
			} 
			$sql = "CREATE TABLE member (
				id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				fname VARCHAR(100) NOT NULL,
				lname VARCHAR(100) NOT NULL,
				address VARCHAR(250) NOT NULL,
				gender VARCHAR(100) NOT NULL,
				password VARCHAR(255) NOT NULL,
				email VARCHAR(100) NOT NULL,
				username VARCHAR(100) NOT NULL,
				dateadded DATE NOT NULL
			)";
			if ($connection->query($sql) === TRUE) {
    			echo "Table Member created successfully <br>";
			} else {
			    echo "Error creating table: " . $connection->error;
			}

			$connection->close();

		}
		function insertInitMember($servername, $username, $password, $dbName)
		{
			$connection = new mysqli($servername, $username, $password, $dbName);
			if ($connection->connect_error) {
    			die("Connection failed: " . $connection->connect_error);
			} 
			$sql = "INSERT INTO member(id, fname, lname, address, gender, password, email, username, dateadded)
					VALUES (1, 'fname', 'lname', 'address', 'gender', 'password', 'email', 'username', NOW())";
			if ($connection->query($sql) === TRUE) {
    			echo "Insert Into member sucessfully <br>";
			} else {
			    echo "Error inserting: " . $connection->error;
			}

			$connection->close();
		}
		function insertInitAdmin($servername, $username, $password, $dbName)
		{
			$connection = new mysqli($servername, $username, $password, $dbName);
			if ($connection->connect_error) {
    			die("Connection failed: " . $connection->connect_error);
			} 
			$sql = "INSERT INTO admin(id, fname, lname, address, gender, password, username, dateadded)
					VALUES (1, 'admin', 'adminstrator', 'address', 'gender', 'password', 'admin', NOW())";
			if ($connection->query($sql) === TRUE) {
    			echo "Insert Into member sucessfully <br>";
			} else {
			    echo "Error inserting: " . $connection->error;
			}

			$connection->close();
		}
		function insertJob($servername, $username, $password, $dbName, $id, $category, $jobtitle, $location, $salary, $company, $jobdescription, $contact)
		{
			$connection = new mysqli($servername, $username, $password, $dbName);
			if ($connection->connect_error) {
    			die("Connection failed: " . $connection->connect_error);
			} 
			$addjob = "INSERT INTO jobs(id, category, jobtitle, location, salary, company, jobdescription, contact, dateadded) VALUES ('".$id."', '".$category."', '".$jobtitle."', '".$location."', '".$salary."','".$company."', '".$jobdescription."', '".$contact."', NOW())";
			if ($connection->query($addjob) === TRUE) {
    			echo "Insert Into member sucessfully <br>";
			} else {
			    echo "Error inserting: " . $connection->error;
			}

			$connection->close();
		}
		function createDB($servername, $username, $password, $dbName)
		{
			$connection = new mysqli($servername, $username, $password);
			if($connection->connect_error)
			{
				die("Connerction failed: " . $connection->connect_error);
			}
			$sql = "CREATE DATABASE ". $dbName;
			if($connection->query($sql) === TRUE)
			{
				echo "Database created successfully.";
			}
			else
			{
				echo "Error creating database: " . $connection->error;
			}
			$this->createTablejobs("localhost", "root", "", "jobinquirydata");
			$this->createAdmin("localhost", "root", "", "jobinquirydata");
			$this->createMember("localhost", "root", "", "jobinquirydata");
			$this->insertInitMember("localhost", "root", "", "jobinquirydata");
			$this->insertInitAdmin("localhost", "root", "", "jobinquirydata");
			$this->insertJob("localhost", "root", "", "jobinquirydata", 1,"Computer Science", "Programmer", "Silang Bayan", "20,000-25,000", "CompShop", "Tindahan ng 0 at 1", '0101010101');
			$this->insertJob("localhost", "root", "", "jobinquirydata", 2,"Service", "Customer Service Associates", "Imus Cavite", "22,000-24,000", "TaskUs", "<br><p>The Customer Service Associate (CSA) works in support of the store management team to facilitate the completion of all store level tasks and performs a variety of tasks related to different areas of the store including food preparation, cash register duties, customer service, general housekeeping and other related functions. The CSA ensures an exceptional customer experience that supports our vision to become “fast casual to go with world class convenience”.<p> <br><br><h4>Job Qualifications</h4><br><ul><li>Must have completed at least two years college education.</li><li>High school geaduates are welcome to apply, if with at least two years BPO related work experience ridiculously good communication skills.</li><ul>", 'taskus.com.ph');
			$this->insertJob("localhost", "root", "", "jobinquirydata", 3,"Service", "Customer Service Associates II", "Trece Martirez City", "13,000-20,000", "Convergys", "<br><p>The Customer Service Associate (CSA) works in support of the store management team to facilitate the completion of all store level tasks and performs a variety of tasks related to different areas of the store including food preparation, cash register duties, customer service, general housekeeping and other related functions. The CSA ensures an exceptional customer experience that supports our vision to become “fast casual to go with world class convenience”.<p><br><br><h4>Job Qualifications</h4><ul><li>Experience in Customer Service support</li><li>Work Experience in Sales role.</li><ul>", 'convergys.com');
			$this->insertJob("localhost", "root", "", "jobinquirydata", 4,"Administration", "CSR Clerk", "Dasmarinas City", "13,000-20,000", "Dela Salle Heath Sciences Institute", "<br><p>Responsible for acting as a liaison between customers and companies. Assists with complaints, orders, errors, account questions, billing, cancelations, and other queries.</p><br><br><h4>Qulifications required for CSR</h4><ul><li>Bachelors/College degree</li><li>Atleast six months work experience/Newly graduate.</li></ul>", 'dlsdhealth.com');
			$this->insertJob("localhost", "root", "", "jobinquirydata", 5,"Administration", "CSR Clerk", "Silang Cavite", "14,000-20,000", "Silang Medical Center", "<br><p>Responsible for acting as a liaison between customers and companies. Assists with complaints, orders, errors, account questions, billing, cancelations, and other queries.</p><br><br><h4>Qualifications required for CSR</h4><ul><li>Bachelors/College degree</li><li>Atleast 2 years work experience.</li></ul>", 'SilangMedical.com');
			$this->insertJob("localhost", "root", "", "jobinquirydata", 6,"Information Technology", "Encoder", "Dasmarinas City", "12,000-14,000", "De La Salle Dasmarinas", "<br><p>Data encoders are valuable additions to small businesses. They efficiently enter data and carefully follow regulatory and corporate guidelines, policies and procedures during the course of their work. Include questions in your interview that address job candidates functional and technical skills</p><br><br><h4>Qualifications required for CSR</h4><ul><li>Male</li><li>20 years old and above</li><li>Knowledge in Microsoft office,excel and powerpoint</li></ul>", '0988843726');
			$this->insertJob("localhost", "root", "", "jobinquirydata", 7,"Information Technology", "Encoder", "Silang Cavite", "12,000-14,000", "Silang Cavite", "<br><p>Data encoders are valuable additions to small businesses. They efficiently enter data and carefully follow regulatory and corporate guidelines, policies and procedures during the course of their work. Include questions in your interview that address job candidates functional and technical skills.</p><br><br><h4>Qualifications required for CSR</h4><ul><li>Male</li><li>20 years old and above</li><li>Knowledge in Microsoft office,excel and powerpoint</li><li>Two years work experience</li></ul>", '0959873726');
			$this->insertJob("localhost", "root", "", "jobinquirydata", 8,"Industrial", "Production Operator", "Silang Cavite", "10,000-13,000", "Silang Cavite", "<br><p>A production operator, also known as a machine operator, uses equipment to assist with manufacturing, packaging, and other steps along a production line. While the exact duties may vary from company to company, a production operator may be expected to handle heavy machinery such as forklifts.</p><br><br><h4>Qualifications required for Production Operator</h4><ul><li>Male and Female</li><li>With pervious ackground in manufacturing set up would be an advantage but not necessarily preffered</li><li>Atleast High School Graduate</li></ul>", '0976763726');
			$this->insertJob("localhost", "root", "", "jobinquirydata", 9,"Administration", "HR/Admin Staff", "Dasmarinas City", "10,000-13,000", "Reeracoen Dasmarinas", "<br><p>The HR admin/staff carries out responsibilities in these functional areas: departmental development, Human Resource Information Systems (HRIS), employee relations, training and development, benefits, compensation, organizational development, and employment.</p><br><br><h4>Qualifications required for HR/Admin Staff</h4><ul><li>Male and Female</li><li>With pervious ackground in manufacturing set up would be an advantage but not necessarily preffered</li><li>Aleast a high school diploma or a General Equivalency Diploma (GED) although some employers prefer to hire candidates who have an associate or bachelor s degree.</li><li>One also needs certain soft skills, or personal qualities, to succeed in this occupation.</li></ul>", '0957689726');
			$this->insertJob("localhost", "root", "", "jobinquirydata", 10,"Service", "Service Assistant", "Silang Cavite", "10,000-13,000", "Premier Silang Cavite", "<br><p>A service assistant is the primary point of contact between a business and its customers. If customers want to place an order, find information, get advice, return a purchase or make a complaint, they will invariably talk to a customer service assistant.</p><br><br><h4>Qualifications required for Service Assistant</h4><ul><li>Male and Female</li><li>With pervious ackground in manufacturing set up would be an advantage but not necessarily preffered</li><li>Aleast a high school diploma or a General Equivalency Diploma (GED) although some employers prefer to hire candidates who have an associate or bachelor s degree.</li><li>One also needs certain soft skills, or personal qualities, to succeed in this occupation.</li></ul>", '0976763726');
			$this->insertJob("localhost", "root", "", "jobinquirydata", 11,"Service", "Cashier", "Silang Cavite", "10,000-16,000", "Expressions Stationary Shop Inc-Silang", "<br><p>1) Receive payment by cash, check, credit cards, vouchers, or automatic debits. 2) Issue receipts, refunds, credits, or change due to customers. 3) Count money in cash drawers at the beginning of shifts to ensure that amounts are correct and that there is adequate change</p><br><br><h4>Qualifications required for Cashier</h4><ul><li>Bachelors degree Holder</li><li>Relevant Experience is an advantage</li><li>open to fresh graduates</li></ul>", '0988657262');
			$connection->close();
		}
		
	}
	$data = new Database;
	$data->createDB("localhost", "root", "", "jobinquirydata");
?>
<!Doctype html>
<head>
	<title>Database Create</title>
</head>
<body>
	<form action="index.php">
		<button class="btn btn-default">GO Back</button>
	</form>
</body></html>