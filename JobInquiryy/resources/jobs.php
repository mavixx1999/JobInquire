<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Job Inquiry</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" href="favicon.ico">
<script src="js//jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  <style>
    body
    {
      background-image: url('jobimages/j12.jpg');
      background-repeat: no-repeat;
      background-size: cover;
    }
    .box-color
    {
      background-color: #4682B4;
      color: white;
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
    body{
        background-image: url("jobimages/J12.jpg");
        background-repeat: no-repeat;
        background-position: center; top;
        background-attachment: fixed;
    }
    #jobdata {
      height: 700px;
      overflow-y:hidden;
    }
    #jobdata:hover {
      overflow-y:scroll;
    }
    .adjust
      {
          position: relative;
            top: 70px;
      }
    p
    {
      text-align: justify;
      text-indent: 50px;
      word-spacing: 2px;
    }
</style>

</head>
<body>

  <?php include 'nav.php'; ?>
  <div class="container adjust">
    <div class="row">
      <div class="col-md-4 jumbotron box-color text-left pad ">
        <h2>Search Job</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="text-center" role="form">
          <select name="category" class="form-control">
            <option value="Computer Science" selected>Computer Science</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Engineering">Engineering</option>
            <option value="Business">Business</option>
            <option value="Psychology">Psychology</option>
            <option value="Service">Service</option>
            <option value="Administration">Administration</option>
            <option value="Business">Business</option>
            <option value="Industrial">Industrial</option>
          </select><br>
          <select name="salary" class="form-control">
            <option value="6,000-10,000">6,000-10,000</option>
            <option value="10,000-13,000">10,000-13,000</option>
            <option value="10,000-14,000">10,000-14,000</option>
            <option value="10,000-16,000">10,000-16,000</option>
            <option value="12,000-14,000">12,000-14,000</option>
            <option value="12,000-18,000">12,000-18,000</option>
            <option value="13,000-20,000">13,000-20,000</option>
            <option value="14,000-20,000">14,000-20,000</option>
            <option value="15,000-18,000">15,000-18,000</option>
            <option value="15,000-20,000">15,000-20,000</option>
            <option value="15,000-25,000">15,000-25,000</option>
            <option value="18,000-25,000">18,000-25,000</option>
            <option value="20,000-25,000">20,000-25,000</option>
            <option value="22,000-24,000">22,000-24,000</option>
            <option value="25,000-30,000" selected>25,000-30,000</option>
            <option value="30,000-40,000">30,000-40,000</option>
          </select><br>
          <select name="location" class="form-control">
            <option value="Quezon City" selected>Quezon City</option>
            <option value="Marikina City">Marikina City</option>
            <option value="Pasay City">Pasay City</option>
            <option value="Imus Cavite">Imus Cavite</option>
            <option value="Dasmarinas City">Dasmarinas City</option>
            <option value="Silang">Silang Cavite</option>
            <option value="Cavite City">Cavite City</option>
            <option value="Trece Martirez City">Trece Martirez City</option>
          </select><br>
          <input type="submit" name="submit" value="Search" class="btn btn-default">
        </form>
      </div>
      <div class="col-md-8" id="jobdata">
          <?php 
            $server = "localhost";
            $user = "root";
            $password = "";
            $dbname = "jobinquirydata";
            $tbname = "jobs";
            $conn = new mysqli($server, $user, $password, $dbname);

            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
              $category = $_POST['category'];
              $salary = $_POST['salary'];
              $location = $_POST['location'];

              $search = "SELECT * FROM jobs WHERE category='$category' or salary='$salary' or location='$location'";
              $result = $conn->query($search);
              
              if ($result->num_rows > 0) 
              {
                
                while($row = $result->fetch_assoc()) 
                {
                  echo "<div class='panel panel-primary' id='panel'>";
                  echo "<div class='panel-heading'>".$row['category']."</div>";
                  echo "<div class='panel-body'><h4>Job Title: ".$row['jobtitle']."</h4><br>
                                                Company: ".$row['company']."<br>
                                                Salary: ".$row['salary']."<br>
                                                Location: ".$row['location']."<br>
                                                Contact us: ".$row['contact']."<br>";
                  echo  "<div id=".$row['id']." class='collapse'>";
                  echo    "<h3>Job Descriptions</h3>";
                  echo    $row['jobdescription'];
                  echo  "</div>";
                  echo "</div>";
                  echo  "<div class='panel-footer'>Rating:&nbsp;&nbsp;<span class='glyphicon glyphicon-star'></span>&nbsp;&nbsp;<span class='glyphicon glyphicon-user'></span>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;
                  <button type='button' class='btn btn-info' data-toggle='collapse' data-target='#".$row['id']."'>View Details</button></div>";
                  echo "</div>";
                  
                }
              }
            }
            $conn->close();
          ?>
      </div>
    </div>
  </div>
</body></html>
