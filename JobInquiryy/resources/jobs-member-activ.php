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
      background-color: #B0C4DE;
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
                  echo  "<div id=c".$row['id']." class='collapse'>";
                  echo    "<h3>Job Descriptions</h3>";
                  echo    "<h5>".$row['jobdescription']."</h5>";
                  echo  "</div>";
                  
                  echo "</div>";
                  include 'job-footer.php';
                }
              }
            }

            $conn->close();
          ?>
      </div>
    </div>
  </div>
  <!--echo  echo  "<div class='modal fade' id='".$row['id']."' role='dialog'>";
                  echo  " <div class='modal-dialog'>";                          
                  echo  "<div class='modal-content'>";

                  echo  "<div class='modal-header' style='padding:35px 50px;'>";
                  echo  "<h4><span class='glyphicon glyphicon-stats'></span> Rate</h4>";
                  echo  "</div>";
                  echo  "<div class='modal-body' style='padding:40px 50px;'>";
                  echo  "<form role='form'>";
                  echo  "<div class='form-group'>";
                  echo  "<label for='usrname'><span class='glyphicon glyphicon-user'></span>Username</label>";
                  echo  "<input type='text' class='form-control' id='usrname' placeholder='Enter email'>";
                  echo  "</div>";
                  echo  "<div class='form-group'>";
                  echo  "<label for='psw'><span class='glyphicon glyphicon-eye-open'></span> Password</label>";
                  echo  "<input type='text' class='form-control' id='psw' placeholder='Enter password'>";
                  echo  "</div>";
                  echo  "<div class='checkbox'>";
                  echo  "<label><input type='checkbox' value='' checked>Remember me</label>";
                  echo  "</div>";
                  echo  "<button type='submit' class='btn btn-success btn-block'><span class='glyphicon glyphicon-off'></span> Login</button>";
                  echo  "</form>";
                  echo  "</div>";
                  echo  "<div class='modal-footer'>";
                  echo  "<button type='submit' class='btn btn-danger btn-default pull-left' data-dismiss='modal'><span class='glyphicon glyphicon-remove'></span></button>";
                  echo  "<p>Not a member? <a href='#' style='color:green;'>Sign Up</a></p>";
                  echo  "</div>";
                  echo  "</div>";
                  echo  "</div>";
                  echo  "</div>";
                  echo  "<script>";
                  echo  "$(document).ready(function(){";
                  echo  "$('#my".$row['id']."').click(function(){";
                  echo  "$('#".$row['id']."').modal();";
                  echo  "});";
                  echo  "});";
                  echo  "</script>";

      echo  "<div class='modal fade' id='".$row['id']."' role='dialog'>";
                  echo  " <div class='modal-dialog'>";                          
                  echo  "<div class='modal-content'>";

                  echo  "<div class='modal-header' style='padding:35px 50px;'>";
                  echo  "<h4><span class='glyphicon glyphicon-stats'></span> Rate</h4>";
                  echo  "</div>";
                  echo  "<div class='modal-body' style='padding:40px 50px;'>";
                  echo  "<form role='form' action=".htmlspecialchars($_SERVER['PHP_SELF']).">";
                   
                  echo  "<div class='form-group text-center'>";
                  echo    "<label><span class='glyphicon glyphicon-star'></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";
                  echo     "<label><input type='radio' name='gender' value='1'>1</label>&nbsp;&nbsp;&nbsp;";
                  echo     "<label><input type='radio' name='gender' value='2'>2</label>&nbsp;&nbsp;&nbsp;";
                  echo     "<label><input type='radio' name='gender' value='3'>3</label>&nbsp;&nbsp;&nbsp;";
                  echo     "<label><input type='radio' name='gender' value='4'>4</label>&nbsp;&nbsp;&nbsp;";
                  echo     "<label><input type='radio' name='gender' value='5'>5</label>";
                  echo   "</div>";
                 
                  echo  "<button type='submit' class='btn btn-success btn-block'>Submit</button>";
                  echo  "</form>";
                  echo  "</div>";
                  echo  "<div class='modal-footer'>";
                  echo  "<button type='submit' class='btn btn-danger btn-default pull-left' data-dismiss='modal'><span class='glyphicon glyphicon-remove'></span></button>";
                  
                  echo  "</div>";
                  echo  "</div>";
                  echo  "</div>";
                  echo  "</div>";
                  echo  "<script>";
                  echo  "$(document).ready(function(){";
                  echo  "$('#my".$row['id']."').click(function(){";
                  echo  "$('#".$row['id']."').modal();";
                  echo  "});";
                  echo  "});";
                  echo  "</script>";
                -->
</body></html>
