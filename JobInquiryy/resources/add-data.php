<?php 
  session_start();
  $server = "localhost";
  $name = "root";
  $password = "";
  $dbname = "jobinquirydata";
  $tbname = "admin";

  $category = "";
  $jobtitle = "";
  $location = "";
  $salary = "";
  $company = "";
  $jobdescription = "";
  $contact = "";
  $dateadded = "";

  $adminid = $_SESSION['administrator'];

  $conn = new mysqli($server, $name, $password, $dbname);
  $sql = "SELECT * FROM ".$tbname." WHERE username='$adminid'";
  $rslt = $conn->query($sql);
  $rows = mysqli_fetch_array($rslt, MYSQLI_ASSOC);
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {

    $category = $_POST['category'];
    $jobtitle = $_POST['jobtitle'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $company = $_POST['company'];
    $jobdescription = $_POST['jobdesc'];
    $contact = $_POST['contact'];
    $dateadded = $_POST['dateadded'];
    $addjob = "INSERT INTO jobs(category, jobtitle, location, salary, company, jobdescription, contact, dateadded) VALUES ('".$category."', '".$jobtitle."', '".$location."', '".$salary."', '".$company."', '".$jobdescription."', '".$contact."', '".$dateadded."')";
    $conn->query($addjob);

  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Job Inquiry</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="js//jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    body
    {
      margin-top: 2%;
      background-image: url('jobimages/j4.jpg');
      background-repeat: no-repeat;
      background-size: cover;
    }
    .pad
    {
      padding: 10px;
    }
    .box-admin
    {
      /*border: 2px solid orange;*/
      background-color: #333;
      color: white;
      height: 600px;
    }
    .box
    {
      background-color: orange;
      color: white;
      height: 600px;
    }
    .pos
    {
      position: relative;
    }
    img
    {
      border: 1px solid white;
      height: 300px;
      width: 200px;
    }
    h2
    {
      color: white;
    }
    #admin {
      overflow-y:hidden;
    }
    #admin:hover {
      overflow-y:scroll;
    }
    table .item:hover
    {
      color: black;
      background-color: orange;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Administrator</h2>
    <div class="row pad">
      <div class="col-md-9 box pad" id="admin">
        <div class="col-md-4">
        <a href="add-data.php" class="btn btn-warning">Add Data</a>
        <a href="delete-data.php" class="btn btn-warning">Delete Data</a>
        <a href="update-data.php" class="btn btn-warning">Update Data</a>
        
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <br><select name="category" class="form-control" class="form-control">
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
                  <input type="text" name="jobtitle" placeholder="jobtitle" value="" class="form-control"><br>
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
                  <input type="text" name="company" placeholder="company" value="" class="form-control"><br>
                  <textarea rows="4" cols="30" type="text" name="jobdesc" placeholder="jobdescription" value="" class="form-control"></textarea><br> 
                  
                  <input type="text" name="contact" placeholder="Contact" value="" class="form-control"><br>
                  <input type="date" name="dateadded" class="form-control"><br>
                  <input type="submit" name="submit" value="Submit" class="btn btn-success" class="form-control">
              </form>
         </div>
         <div class="col-md-8">
             <?php
                $search = "SELECT * FROM jobs";
                $result = $conn->query($search);
                echo "<table class='table'>
                        <thead>
                          <tr>
                            <th>
                            ID</th>
                            <th>
                            Category</th>
                            <th>
                            Job Title</th>
                            <th>
                            Location</th>
                            <th>
                            Salary</th>
                            <th>
                            Date Added</th>
                          </tr>
                        </thead>
                      ";
                      echo "<tbody>";
                      while($row = $result->fetch_assoc()) 
                      {
                        echo "
                          <tr>
                              <td>".$row['id']."</td>
                              <td>".$row['category']."</td>
                              <td>".$row['jobtitle']."</td>
                              <td>".$row['location']."</td>
                              <td>".$row['salary']."</td>
                              <td>".$row['dateadded']."</td>
                            </tr>
                          ";
                        }
                        echo "</tbody>";
                    echo "</table>";
              ?>
           </div>
      </div>
      <div class="col-md-3 box-admin pad">
            <img>
            <table class="table-hover pos">
              <thead>
                <tr class="item">
                  <th></th>
                  <th>Admin Info</th>
                </tr>
              </thead>
              <tbody>
                <tr class="item">
                  <td>User name&nbsp;&nbsp;</td>
                  <td><?php echo $rows['username']; ?></td>
                </tr>
                <tr class="item">
                  <td>First name&nbsp;&nbsp;</td>
                  <td><?php echo $rows['fname']; ?></td>
                </tr>
                <tr class="item">
                  <td>Last name&nbsp;&nbsp;</td>
                  <td><?php echo $rows['lname']; ?></td>
                </tr>
                <tr class="item">
                  <td>Address&nbsp;&nbsp;</td>
                  <td><?php echo $rows['address'] ?></td>
                </tr>
                <tr class="item">
                  <td>Gender&nbsp;&nbsp;</td>
                  <td><?php echo $rows['gender']; ?></td>
                </tr>
                <tr class="item">
                  <td>Date joined&nbsp;&nbsp;</td>
                  <td><?php echo $rows['dateadded'] ?></td>
                </tr>
              </tbody>
            </table>
            <form action="log-out.php" method="post" class="text-right pad">
              <input type="submit" value="log out" class="btn btn-warning">
              <a href="add-admin.php" style="color: white;">Add Admin</a>
            </form>
        </div>
    </div>
  </div>

</body></html>
<?php
$conn->close();
?>